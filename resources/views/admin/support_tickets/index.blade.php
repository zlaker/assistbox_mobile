@php
    /** @var \Illuminate\Contracts\Pagination\LengthAwarePaginator $tickets */
    /** @var array<string> $statuses */
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Tickets</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
<main class="min-h-screen p-6">
    <div class="mx-auto max-w-7xl">
        <h1 class="text-2xl font-semibold mb-6">Support Tickets</h1>

        @if (session('status'))
            <div class="rounded-md bg-green-50 p-4 mb-4 text-green-800">{{ session('status') }}</div>
        @endif

        <div class="overflow-x-auto bg-white rounded-lg shadow ring-1 ring-gray-200">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Device</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Question</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Answer</th>
                    <th class="px-4 py-3"></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($tickets as $ticket)
                    <tr class="align-top">
                        <td class="px-4 py-3 text-sm text-gray-700">#{{ $ticket->id }}</td>
                        <td class="px-4 py-3 text-sm text-gray-500">{{ $ticket->created_at->format('Y-m-d H:i') }}</td>
                        <td class="px-4 py-3 text-sm">
                            {{ optional($ticket->user)->email ?? '—' }}
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-500">{{ $ticket->device_id }}</td>
                        <td class="px-4 py-3 text-sm font-medium">{{ $ticket->title }}</td>
                        <td class="px-4 py-3 text-sm">{{ $ticket->question }}</td>
                        <td class="px-4 py-3 text-sm">
                            <form action="{{ route('admin.support.update', $ticket) }}" method="POST" class="flex items-center gap-2">
                                @csrf
                                @method('PATCH')
                                <select name="status" class="border-gray-300 rounded-md text-sm">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status }}" @selected($ticket->status === $status)>{{ $status }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="px-2 py-1 text-xs bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                            </form>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <form action="{{ route('admin.support.update', $ticket) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="{{ $ticket->status }}">
                                <textarea name="answer" rows="3" class="w-72 border-gray-300 rounded-md" placeholder="Type answer...">{{ old('answer', $ticket->answer) }}</textarea>
                                <div class="mt-2">
                                    <button type="submit" class="px-2 py-1 text-xs bg-green-600 text-white rounded hover:bg-green-700">Save Answer</button>
                                </div>
                            </form>
                        </td>
                        <td class="px-4 py-3"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $tickets->links() }}
        </div>
    </div>
    </main>
</body>
</html>
