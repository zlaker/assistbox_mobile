<?php

namespace Tests\Feature;

use App\Models\SupportTicket;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupportApiTest extends TestCase
{
    use RefreshDatabase;

    private string $deviceId = 'TEST-DEVICE-UUID-12345';

    /**
     * Тест создания support ticket через iOS API
     */
    public function test_can_create_support_ticket(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
            'Content-Type' => 'application/json',
        ])->postJson('/api/ios/support', [
            'message' => 'Тестовый вопрос от пользователя',
            'deviceId' => $this->deviceId,
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'id',
                'message',
                'response',
                'status',
                'createdAt',
                'title',
                'device_id',
            ])
            ->assertJson([
                'message' => 'Тестовый вопрос от пользователя',
                'status' => 'pending',
                'response' => null,
            ]);

        $this->assertDatabaseHas('support_tickets', [
            'question' => 'Тестовый вопрос от пользователя',
            'device_id' => $this->deviceId,
            'status' => 'new',
        ]);
    }

    /**
     * Тест валидации - пустое сообщение
     */
    public function test_cannot_create_ticket_with_empty_message(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
            'Content-Type' => 'application/json',
        ])->postJson('/api/ios/support', [
            'message' => '',
            'deviceId' => $this->deviceId,
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['message']);
    }

    /**
     * Тест валидации - отсутствует device_id
     */
    public function test_cannot_create_ticket_without_device_id(): void
    {
        $response = $this->postJson('/api/ios/support', [
            'message' => 'Вопрос без device_id',
        ]);

        $response->assertStatus(403);
    }

    /**
     * Тест получения списка тикетов для устройства
     */
    public function test_can_get_tickets_list(): void
    {
        // Создаём пользователя и тикеты
        $user = User::factory()->create(['device_id' => $this->deviceId]);
        
        SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
            'question' => 'Первый вопрос',
            'status' => 'new',
            'answer' => null,
        ]);

        SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
            'question' => 'Второй вопрос',
            'status' => 'closed',
            'answer' => 'Ответ на второй вопрос',
        ]);

        // Создаём тикет для другого устройства (не должен вернуться)
        $otherUser = User::factory()->create(['device_id' => 'OTHER-DEVICE-ID']);
        SupportTicket::factory()->create([
            'user_id' => $otherUser->id,
            'device_id' => 'OTHER-DEVICE-ID',
            'question' => 'Чужой вопрос',
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson('/api/ios/support/tickets');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'tickets' => [
                    '*' => [
                        'id',
                        'message',
                        'response',
                        'status',
                        'createdAt',
                    ],
                ],
            ])
            ->assertJsonCount(2, 'tickets');

        // Проверяем маппинг полей
        $tickets = $response->json('tickets');
        
        // Первый тикет (pending)
        $this->assertEquals('Второй вопрос', $tickets[0]['message']);
        $this->assertEquals('answered', $tickets[0]['status']);
        $this->assertEquals('Ответ на второй вопрос', $tickets[0]['response']);

        // Второй тикет (answered)
        $this->assertEquals('Первый вопрос', $tickets[1]['message']);
        $this->assertEquals('pending', $tickets[1]['status']);
        $this->assertNull($tickets[1]['response']);
    }

    /**
     * Тест статусов: new/in_progress -> pending, closed -> answered
     */
    public function test_status_mapping_is_correct(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);

        // new -> pending
        $newTicket = SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
            'status' => 'new',
        ]);

        // in_progress -> pending
        $inProgressTicket = SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
            'status' => 'in_progress',
        ]);

        // closed -> answered
        $closedTicket = SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
            'status' => 'closed',
            'answer' => 'Ответ',
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson('/api/ios/support/tickets');

        $tickets = $response->json('tickets');

        $this->assertEquals('answered', $tickets[0]['status']);
        $this->assertEquals('pending', $tickets[1]['status']);
        $this->assertEquals('pending', $tickets[2]['status']);
    }

    /**
     * Тест формата даты (ISO8601 с миллисекундами)
     */
    public function test_date_format_is_iso8601_with_milliseconds(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);
        
        SupportTicket::factory()->create([
            'user_id' => $user->id,
            'device_id' => $this->deviceId,
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson('/api/ios/support/tickets');

        $createdAt = $response->json('tickets.0.createdAt');
        
        // Формат: 2025-01-24T12:34:56.789Z
        $this->assertMatchesRegularExpression(
            '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\.\d{3}Z$/',
            $createdAt
        );
    }

    /**
     * Тест изоляции данных между устройствами
     */
    public function test_tickets_are_isolated_by_device_id(): void
    {
        $device1 = 'DEVICE-1-UUID';
        $device2 = 'DEVICE-2-UUID';

        $user1 = User::factory()->create(['device_id' => $device1]);
        $user2 = User::factory()->create(['device_id' => $device2]);

        SupportTicket::factory()->create([
            'user_id' => $user1->id,
            'device_id' => $device1,
            'question' => 'Вопрос от устройства 1',
        ]);

        SupportTicket::factory()->create([
            'user_id' => $user2->id,
            'device_id' => $device2,
            'question' => 'Вопрос от устройства 2',
        ]);

        // Устройство 1 видит только свои тикеты
        $response1 = $this->withHeaders(['device_id' => $device1])
            ->getJson('/api/ios/support/tickets');

        $this->assertCount(1, $response1->json('tickets'));
        $this->assertEquals('Вопрос от устройства 1', $response1->json('tickets.0.message'));

        // Устройство 2 видит только свои тикеты
        $response2 = $this->withHeaders(['device_id' => $device2])
            ->getJson('/api/ios/support/tickets');

        $this->assertCount(1, $response2->json('tickets'));
        $this->assertEquals('Вопрос от устройства 2', $response2->json('tickets.0.message'));
    }

    /**
     * Тест совместимости со старым форматом (title + question)
     */
    public function test_backward_compatibility_with_old_format(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
            'Content-Type' => 'application/json',
        ])->postJson('/api/ios/support', [
            'title' => 'Заголовок вопроса',
            'question' => 'Текст вопроса (старый формат)',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('support_tickets', [
            'title' => 'Заголовок вопроса',
            'question' => 'Текст вопроса (старый формат)',
            'device_id' => $this->deviceId,
        ]);
    }

    /**
     * Тест полного цикла: создание → ответ админа → получение в iOS
     */
    public function test_full_support_cycle(): void
    {
        // 1. iOS создаёт тикет
        $createResponse = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->postJson('/api/ios/support', [
            'message' => 'Не могу добавить книгу',
            'deviceId' => $this->deviceId,
        ]);

        $ticketId = $createResponse->json('id');
        $this->assertNotNull($ticketId);

        // 2. Админ отвечает на тикет
        $ticket = SupportTicket::find($ticketId);
        $ticket->update([
            'status' => 'closed',
            'answer' => 'Попробуйте обновить приложение до последней версии',
        ]);

        // 3. iOS получает обновлённый список
        $listResponse = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson('/api/ios/support/tickets');

        $listResponse->assertStatus(200);
        
        $updatedTicket = collect($listResponse->json('tickets'))
            ->firstWhere('id', (string) $ticketId);

        $this->assertEquals('answered', $updatedTicket['status']);
        $this->assertEquals(
            'Попробуйте обновить приложение до последней версии',
            $updatedTicket['response']
        );
    }
}
