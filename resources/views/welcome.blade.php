<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Merchant Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 dark:bg-zinc-900 text-gray-900 dark:text-white min-h-screen flex flex-col">

    @if (Route::has('login'))
        <nav class="p-6 flex justify-end space-x-4 bg-white dark:bg-zinc-800 shadow-md">
            @auth
                <a href="{{ url('/dashboard') }}" class="px-4 py-2 rounded-md bg-[#FF2D20] text-white hover:bg-[#D9261D] transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 rounded-md bg-gray-800 text-white hover:bg-gray-700 transition">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded-md bg-gray-600 text-white hover:bg-gray-500 transition">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif

    <main class="flex flex-1 items-center justify-center p-6">
        <div class="max-w-3xl w-full bg-white dark:bg-zinc-800 p-10 rounded-xl shadow-lg ring-1 ring-gray-200 dark:ring-zinc-700">
            <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white">MERCHANT REGISTRATION FORM</h1>
            <h2 class="text-lg text-gray-600 dark:text-gray-400 text-center mt-2">Register/Log in as a merchant</h2>
        </div>
    </main>

</body>
</html>
