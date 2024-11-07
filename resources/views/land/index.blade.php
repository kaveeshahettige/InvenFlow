<x-layout>
    @auth
        <h1>Logged in</h1>
    @endauth

    @guest
    <div class="relative bg-gray-900 text-white min-h-screen">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('');"></div>
        <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
            <div class="text-center space-y-6 max-w-2xl mx-auto">
                <h1 class="text-5xl font-extrabold tracking-tight sm:text-6xl">
                    Welcome to Our InvenFlow
                </h1>
                <p class="text-lg sm:text-xl text-gray-300">
                    We are glad you're here! Sign up or log in to explore amazing features and content.
                </p>

                <div class="flex justify-center space-x-6">
                    <a href="{{ route('login') }}" class="inline-block px-8 py-3 text-xl font-semibold text-gray-800 bg-white rounded-full hover:bg-gray-200 transition-all">
                        Log In
                    </a>
                    <a href="{{ route('register') }}" class="inline-block px-8 py-3 text-xl font-semibold text-white bg-green-600 rounded-full hover:bg-green-500 transition-all">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endguest
</x-layout>
