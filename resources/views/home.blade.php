<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Court</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100 p-6">
    <!-- Logout Button -->
    <div class="flex justify-end mb-4">
        <button onclick="window.history.back()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Logout
        </button>
    </div>
    <!-- Date Picker -->
    <div class="calender bg-white p-6 rounded-lg shadow mb-8">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-700">Select a Date</h2>
        <input type="date" id="bookingDate" onchange="showTimeSchedule()"
            class="block w-full px-4 py-2 border rounded-md focus:ring focus:ring-gray-300">
    </div>
    <!-- Time Schedule Table -->
    <div class="time-schedule hidden bg-white p-6 rounded-lg shadow mb-8">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-700">Select a Time and Court</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="p-3 border">Time</th>
                        @foreach ($allCourt as $court)
                            <th class="p-3 border">{{ $court->court_number }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($timeSlots as $time)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3 border">{{ $time }} (Rp {{ $prices }})</td>
                            @foreach ($allCourt as $court)
                                <td class="p-3 border">
                                    <button
                                        class="mt-2 bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 transition duration-200">
                                        Book
                                    </button>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function showTimeSchedule() {
            const date = document.getElementById("bookingDate").value;
            document.querySelector(".time-schedule").classList.toggle("hidden", !date);
        }
    </script>
</body>

</html>
