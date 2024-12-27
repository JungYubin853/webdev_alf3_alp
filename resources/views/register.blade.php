<x-layout title="Register Page">
    <!-- Title -->
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-black">Join the Adventure now!</h1>
    </div>

    <!-- Form -->
    <form action="{{ route('register') }}" method="POST" class="space-y-6">
        @csrf

        @if ($errors->any())
            <div class="text-red-500 text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Name Field -->
        <div>
            <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Name"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Phone Number Field -->
        <div>
            <input id="phone_no" name="phone_no" type="text" value="{{ old('phone_no') }}" placeholder="Phone Number"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Email Field -->
        <div>
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Password Field -->
        <div>
            <input id="password" name="password" type="password" placeholder="Password"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Password Confirmation Field -->
        <div>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                class="w-full py-2 bg-gray-700 text-white rounded-md shadow-sm hover:bg-gray-600 transition duration-300">
                {{ __('Register') }}
            </button>
        </div>
    </form>

    <!-- Redirect to Login -->
    <p class="text-center mt-4 text-black">
        Already have an account?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login here</a>
    </p>
</x-layout>
