<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupportTicketResource;
use App\Repositories\SupportTicketRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    public function __construct(private readonly SupportTicketRepository $repo)
    {
    }

    // POST /ios/support
    public function store(Request $request): SupportTicketResource
    {
        $user = $request->attributes->get('custom_user');
        if (!$user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        // Поддерживаем оба формата:
        // 1. Старый: title + question
        // 2. Новый iOS: message + deviceId
        $validated = $request->validate([
            'message' => ['required_without:question', 'string'],
            'title' => ['nullable', 'string', 'max:255'],
            'question' => ['nullable', 'string'],
            'deviceId' => ['nullable', 'string'], // iOS отправляет deviceId явно
        ]);

        // Если пришёл message (новый формат iOS), используем его как question
        $message = $validated['message'] ?? $validated['question'];
        $title = $validated['title'] ?? 'Support Request';

        $ticket = $this->repo->create([
            'title' => $title,
            'question' => $message,
            'user_id' => $user->id,
            'device_id' => (string) $user->device_id,
            'status' => 'new',
        ]);

        return new SupportTicketResource($ticket);
    }

    // GET /ios/support/tickets
    public function tickets(Request $request): array
    {
        $user = $request->attributes->get('custom_user');
        if (!$user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $tickets = $this->repo->listByDeviceId((string) $user->device_id);
        
        // iOS ожидает структуру { tickets: [...] }
        return [
            'tickets' => SupportTicketResource::collection($tickets)->resolve()
        ];
    }
}
