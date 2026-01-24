<?php

namespace App\Repositories;

use App\Models\SupportTicket;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class SupportTicketRepository
{
    public function create(array $data): SupportTicket
    {
        return SupportTicket::create($data);
    }

    public function listByDeviceId(string $deviceId, int $perPage = null): Collection|LengthAwarePaginator
    {
        $query = SupportTicket::query()
            ->where('device_id', $deviceId)
            ->latest();

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function paginateAll(int $perPage = 20): LengthAwarePaginator
    {
        return SupportTicket::query()->latest()->paginate($perPage);
    }

    public function updateStatusAndAnswer(SupportTicket $ticket, ?string $status, ?string $answer): SupportTicket
    {
        if ($status !== null) {
            $ticket->status = $status;
        }
        if ($answer !== null) {
            $ticket->answer = $answer;
        }
        $ticket->save();
        return $ticket;
    }

    public function findByIdAndDeviceId(int $id, string $deviceId): ?SupportTicket
    {
        return SupportTicket::query()
            ->where('id', $id)
            ->where('device_id', $deviceId)
            ->first();
    }

    public function markAsRead(SupportTicket $ticket): SupportTicket
    {
        if ($ticket->read_at === null) {
            $ticket->read_at = now();
            $ticket->save();
        }
        return $ticket;
    }

    public function countUnreadByDeviceId(string $deviceId): int
    {
        return SupportTicket::query()
            ->where('device_id', $deviceId)
            ->whereNotNull('answer') // Только тикеты с ответом
            ->whereNull('read_at')    // Непрочитанные
            ->count();
    }
}
