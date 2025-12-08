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
}
