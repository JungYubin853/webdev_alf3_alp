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

    <!-- Users Table -->
    <div class="overflow-x-auto bg-white p-6 rounded-lg shadow">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">User ID</th>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border">Phone Number</th>
                    <th class="p-3 border">Created At</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse ($allUser as $user)
                    <tr class="hover:bg-gray-100 {{ $loop->even ? 'bg-gray-50' : '' }}">
                        <td class="p-2 border">{{ $loop->index + 1 }}</td>
                        <td class="p-3 border">{{ $user->id }}</td>
                        <td class="p-3 border">{{ $user->name }}</td>
                        <td class="p-3 border">{{ $user->email }}</td>
                        <td class="p-3 border">{{ $user->phone_no }}</td>
                        <td class="p-3 border">{{ $user->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 border text-gray-500">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
