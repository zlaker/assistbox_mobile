<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeviceBackup;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BackupController extends Controller
{
    /**
     * POST /api/backup
     *
     * Upload (upsert) a full library backup for the current device.
     * One backup per device — subsequent uploads overwrite the previous one.
     */
    public function store(Request $request): JsonResponse
    {
        $user = $request->attributes->get('custom_user');
        if (! $user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $payload = $request->all();

        $appVersion = $payload['appVersion'] ?? null;
        $bookCount = count($payload['library']['books'] ?? []);
        $sizeBytes = strlen((string) $request->getContent());

        $backup = DeviceBackup::updateOrCreate(
            ['device_id' => (string) $user->device_id],
            [
                'user_id' => $user->id,
                'backup_data' => $payload,
                'app_version' => $appVersion,
                'book_count' => $bookCount,
                'size_bytes' => $sizeBytes,
            ],
        );

        return response()->json([
            'status' => 'ok',
            'id' => $backup->id,
            'created_at' => $backup->updated_at->toIso8601String(),
        ], Response::HTTP_OK);
    }

    /**
     * GET /api/backup/{deviceId}
     *
     * Download the latest backup for a device.
     */
    public function show(Request $request, string $deviceId): JsonResponse
    {
        $user = $request->attributes->get('custom_user');
        if (! $user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $backup = DeviceBackup::where('device_id', $deviceId)->first();

        if (! $backup) {
            return response()->json(['error' => 'No backup found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($backup->backup_data);
    }

    /**
     * GET /api/backup/{deviceId}/list
     *
     * List backup metadata for a device (currently one per device).
     */
    public function index(Request $request, string $deviceId): JsonResponse
    {
        $user = $request->attributes->get('custom_user');
        if (! $user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $backups = DeviceBackup::where('device_id', $deviceId)
            ->select(['id', 'device_id', 'app_version', 'book_count', 'size_bytes', 'created_at', 'updated_at'])
            ->orderByDesc('updated_at')
            ->get()
            ->map(fn (DeviceBackup $b) => [
                'id' => (string) $b->id,
                'createdAt' => $b->updated_at->toIso8601String(),
                'appVersion' => $b->app_version,
                'bookCount' => $b->book_count,
                'deviceId' => $b->device_id,
            ]);

        return response()->json($backups);
    }

    /**
     * DELETE /api/backup/{deviceId}/{backupId}
     *
     * Delete a specific backup.
     */
    public function destroy(Request $request, string $deviceId, int $backupId): JsonResponse
    {
        $user = $request->attributes->get('custom_user');
        if (! $user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $deleted = DeviceBackup::where('id', $backupId)
            ->where('device_id', $deviceId)
            ->delete();

        if (! $deleted) {
            return response()->json(['error' => 'Backup not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json(['status' => 'ok']);
    }
}
