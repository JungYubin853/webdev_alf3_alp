<x-layout title="Login Page">
    <!-- Title -->
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-bold text-black">Join the Adventure now!</h1>
    </div>

    <!-- Form -->
    <form action="{{ route('login') }}" method="POST" class="space-y-6">
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

        <!-- Password Field -->
        <div>
            <input id="password" name="password" type="password" placeholder="Password"
                class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gray-500" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="rounded text-indigo-600 shadow-sm focus:ring-indigo-500" />
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit"
                class="ms-3 w-full py-2 bg-gray-700 text-white rounded-md shadow-sm hover:bg-gray-600 transition duration-300">
                {{ __('Log in') }}
            </button>
        </div>
    </form>

    <!-- Redirect to Register -->
    <p class="text-center mt-4 text-black">
        Doesn't have an account?
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register here</a>
    </p>
</x-layout>
