<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <!-- Title -->
    <x-navbar />
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-700">{{ $title }}</h1>
    </div>

    <!-- Booking Table -->
    <div class="overflow-x-auto bg-white p-6 rounded-lg shadow">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">Booking ID</th>
                    <th class="p-3 border">Court Name</th>
                    <th class="p-3 border">User Name</th>
                    <th class="p-3 border">Tanggal Booking</th>
                    <th class="p-3 border">Payment Status</th>
                    <th class="p-3 border">Start Time</th>
                    <th class="p-3 border">End Time</th>
                    <th class="p-3 border">Payment Link</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse ($allBooking as $booking)
                    @if ($loop->even)
                        @php $bg = "bg-blue-100"; @endphp
                    @else
                        @php $bg = "bg-white"; @endphp
                    @endif
                    <tr class="hover:bg-gray-100">
                        <td class="p-2 border-collapse border-2">{{ $loop->index + 1 }}</td>
                        <td class="p-3 border">{{ $booking->id }}</td>
                        <td class="p-3 border">{{ $booking->court->court_number }}</td>
                        <td class="p-3 border">{{ $booking->user->name }}</td>
                        <td class="p-3 border">{{ $booking->tanggal_booking }}</td>
                        <td class="p-3 border">{{ $booking->payment_status }}</td>
                        <td class="p-3 border">{{ $booking->start_time }}</td>
                        <td class="p-3 border">{{ $booking->end_time }}</td>
                        <td class="p-3 border">{{ $booking->imageUrl }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-3 border text-gray-500">No bookings found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
