<?php

namespace Tests\Feature;

use App\Models\DeviceBackup;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BackupApiTest extends TestCase
{
    use RefreshDatabase;

    private string $deviceId = 'TEST-BACKUP-DEVICE-UUID';

    private function samplePayload(): array
    {
        return [
            'version' => 1,
            'appVersion' => '3.2.0',
            'createdAt' => '2026-07-02T12:00:00Z',
            'deviceId' => $this->deviceId,
            'library' => [
                'books' => [
                    [
                        'id' => 'book-1',
                        'title' => 'Sample Book',
                        'author' => 'Author',
                        'files' => [],
                    ],
                ],
                'collections' => [],
                'archivedBooks' => [],
            ],
            'progress' => [
                'fileProgress' => [],
                'bookmarks' => [],
                'dailyRecords' => [],
            ],
            'settings' => [
                'playback' => ['speed' => 1.0],
            ],
        ];
    }

    public function test_can_upload_backup(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->postJson('/api/backup', $this->samplePayload());

        $response->assertStatus(200)
            ->assertJsonStructure(['status', 'id', 'created_at'])
            ->assertJson(['status' => 'ok']);

        $this->assertDatabaseHas('device_backups', [
            'device_id' => $this->deviceId,
            'app_version' => '3.2.0',
            'book_count' => 1,
        ]);
    }

    public function test_upload_overwrites_existing_backup(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);

        DeviceBackup::create([
            'device_id' => $this->deviceId,
            'user_id' => $user->id,
            'backup_data' => ['old' => true],
            'app_version' => '3.1.0',
            'book_count' => 0,
            'size_bytes' => 10,
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->postJson('/api/backup', $this->samplePayload());

        $response->assertStatus(200);

        $this->assertDatabaseCount('device_backups', 1);
        $this->assertDatabaseHas('device_backups', [
            'device_id' => $this->deviceId,
            'app_version' => '3.2.0',
            'book_count' => 1,
        ]);
    }

    public function test_upload_requires_device_id(): void
    {
        $response = $this->postJson('/api/backup', $this->samplePayload());

        $response->assertStatus(403);
    }

    public function test_can_download_backup(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);
        $payload = $this->samplePayload();

        DeviceBackup::create([
            'device_id' => $this->deviceId,
            'user_id' => $user->id,
            'backup_data' => $payload,
            'app_version' => '3.2.0',
            'book_count' => 1,
            'size_bytes' => 100,
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}");

        $response->assertStatus(200)
            ->assertJson($payload);
    }

    public function test_download_returns_404_when_no_backup(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}");

        $response->assertStatus(404)
            ->assertJson(['error' => 'No backup found']);
    }

    public function test_can_list_backups(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);

        DeviceBackup::create([
            'device_id' => $this->deviceId,
            'user_id' => $user->id,
            'backup_data' => $this->samplePayload(),
            'app_version' => '3.2.0',
            'book_count' => 1,
            'size_bytes' => 100,
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}/list");

        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonStructure([
                ['id', 'createdAt', 'appVersion', 'bookCount', 'deviceId'],
            ]);
    }

    public function test_list_returns_empty_when_no_backups(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}/list");

        $response->assertStatus(200)
            ->assertJsonCount(0);
    }

    public function test_can_delete_backup(): void
    {
        $user = User::factory()->create(['device_id' => $this->deviceId]);

        $backup = DeviceBackup::create([
            'device_id' => $this->deviceId,
            'user_id' => $user->id,
            'backup_data' => $this->samplePayload(),
            'app_version' => '3.2.0',
            'book_count' => 1,
            'size_bytes' => 100,
        ]);

        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->deleteJson("/api/backup/{$this->deviceId}/{$backup->id}");

        $response->assertStatus(200)
            ->assertJson(['status' => 'ok']);

        $this->assertDatabaseMissing('device_backups', ['id' => $backup->id]);
    }

    public function test_delete_returns_404_for_nonexistent_backup(): void
    {
        $response = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->deleteJson("/api/backup/{$this->deviceId}/999");

        $response->assertStatus(404)
            ->assertJson(['error' => 'Backup not found']);
    }

    public function test_backups_are_isolated_by_device(): void
    {
        $device1 = 'DEVICE-BACKUP-1';
        $device2 = 'DEVICE-BACKUP-2';

        $user1 = User::factory()->create(['device_id' => $device1]);
        $user2 = User::factory()->create(['device_id' => $device2]);

        DeviceBackup::create([
            'device_id' => $device1,
            'user_id' => $user1->id,
            'backup_data' => ['device' => 1],
            'book_count' => 1,
            'size_bytes' => 10,
        ]);

        DeviceBackup::create([
            'device_id' => $device2,
            'user_id' => $user2->id,
            'backup_data' => ['device' => 2],
            'book_count' => 2,
            'size_bytes' => 20,
        ]);

        $response = $this->withHeaders([
            'device_id' => $device1,
        ])->getJson("/api/backup/{$device1}/list");

        $response->assertStatus(200)->assertJsonCount(1);

        $response = $this->withHeaders([
            'device_id' => $device2,
        ])->getJson("/api/backup/{$device2}");

        $response->assertStatus(200)->assertJson(['device' => 2]);
    }

    public function test_full_backup_cycle(): void
    {
        $payload = $this->samplePayload();

        $upload = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->postJson('/api/backup', $payload);

        $upload->assertStatus(200);

        $list = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}/list");

        $list->assertStatus(200)->assertJsonCount(1);
        $backupId = $list->json('0.id');

        $download = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}");

        $download->assertStatus(200)->assertJson($payload);

        $delete = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->deleteJson("/api/backup/{$this->deviceId}/{$backupId}");

        $delete->assertStatus(200);

        $emptyList = $this->withHeaders([
            'device_id' => $this->deviceId,
        ])->getJson("/api/backup/{$this->deviceId}/list");

        $emptyList->assertStatus(200)->assertJsonCount(0);
    }
}
