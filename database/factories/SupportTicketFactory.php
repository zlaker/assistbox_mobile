<?php

namespace Database\Factories;

use App\Models\SupportTicket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupportTicket>
 */
class SupportTicketFactory extends Factory
{
    protected $model = SupportTicket::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'question' => fake()->paragraph(),
            'user_id' => User::factory(),
            'device_id' => fake()->uuid(),
            'status' => fake()->randomElement(['new', 'in_progress', 'closed']),
            'answer' => fake()->boolean(50) ? fake()->paragraph() : null,
        ];
    }

    /**
     * Тикет со статусом "new" без ответа
     */
    public function new(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'new',
            'answer' => null,
        ]);
    }

    /**
     * Тикет в работе
     */
    public function inProgress(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'in_progress',
            'answer' => null,
        ]);
    }

    /**
     * Закрытый тикет с ответом
     */
    public function closed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'closed',
            'answer' => fake()->paragraph(),
        ]);
    }

    /**
     * Тикет для конкретного устройства
     */
    public function forDevice(string $deviceId): static
    {
        return $this->state(fn (array $attributes) => [
            'device_id' => $deviceId,
        ]);
    }

    /**
     * Тикет для конкретного пользователя
     */
    public function forUser(User $user): static
    {
        return $this->state(fn (array $attributes) => [
            'user_id' => $user->id,
            'device_id' => $user->device_id,
        ]);
    }
}
