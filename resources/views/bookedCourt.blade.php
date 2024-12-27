<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <x-navbar />
    <!-- Title -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-700">{{ $title }}</h1>
    </div>

    <!-- Booked Courts Table -->
    <div class="overflow-x-auto bg-white p-6 rounded-lg shadow">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">BookedCourt ID</th>
                    <th class="p-3 border">Booking ID</th>
                    <th class="p-3 border">Court Name</th>
                    <th class="p-3 border">Start Time</th>
                    <th class="p-3 border">End Time</th>
                    <th class="p-3 border">Created At</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse ($allBookedCourt as $bookedCourt)
                    <tr class="hover:bg-gray-100 {{ $loop->even }}">
                        <td class="p-2 border">{{ $loop->index + 1 }}</td>
                        <td class="p-3 border">{{ $bookedCourt->id }}</td>
                        <td class="p-3 border">{{ $bookedCourt->booking_id }}</td>
                        <td class="p-3 border">
                            {{ $bookedCourt->court->court_number ?? 'N/A' }}
                        </td>
                        <td class="p-3 border">{{ $bookedCourt->start }}</td>
                        <td class="p-3 border">{{ $bookedCourt->end }}</td>
                        <td class="p-3 border">{{ $bookedCourt->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-3 border text-gray-500">No booked courts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
