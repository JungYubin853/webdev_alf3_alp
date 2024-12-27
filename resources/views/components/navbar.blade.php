<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gray-800 shadow-lg">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <div>
            <a href="{{ url('/') }}" class="text-white text-lg font-semibold">navbar</a>
        </div>
        <div class="flex space-x-4">
            <a href="{{ url('/home') }}" class="text-gray-300 hover:text-white px-3 py-2">Home</a>
            <a href="{{ url('/booking') }}" class="text-gray-300 hover:text-white px-3 py-2">Bookings</a>
            <a href="{{ url('/bookedCourt') }}" class="text-gray-300 hover:text-white px-3 py-2">Booked Courts</a>
            <a href="{{ url('/user') }}" class="text-gray-300 hover:text-white px-3 py-2">Users</a>
        </div>
    </div>
</nav>
