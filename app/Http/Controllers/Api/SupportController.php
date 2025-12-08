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

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'question' => ['required', 'string'],
        ]);

        $ticket = $this->repo->create([
            'title' => $validated['title'],
            'question' => $validated['question'],
            'user_id' => $user->id,
            'device_id' => (string) $user->device_id,
            'status' => 'new',
        ]);

        return new SupportTicketResource($ticket);
    }

    // GET /ios/support/tickets
    public function tickets(Request $request): AnonymousResourceCollection
    {
        $user = $request->attributes->get('custom_user');
        if (!$user) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $tickets = $this->repo->listByDeviceId((string) $user->device_id);
        return SupportTicketResource::collection($tickets);
    }
}
