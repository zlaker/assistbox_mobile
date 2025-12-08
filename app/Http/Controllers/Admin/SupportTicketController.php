<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use App\Repositories\SupportTicketRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupportTicketController extends Controller
{
    public function __construct(private readonly SupportTicketRepository $repo)
    {
        // Web auth is handled in routes via middleware
    }

    public function index(Request $request): View
    {
        $tickets = $this->repo->paginateAll(20);
        $statuses = ['new', 'in_progress', 'closed'];

        return view('admin.support_tickets.index', compact('tickets', 'statuses'));
    }

    public function update(Request $request, SupportTicket $ticket): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,in_progress,closed'],
            'answer' => ['nullable', 'string'],
        ]);

        $this->repo->updateStatusAndAnswer($ticket, $validated['status'], $validated['answer'] ?? null);

        return back()->with('status', 'Support ticket updated.');
    }
}
