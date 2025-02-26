<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="shadow p-3 flex justify-between items-center">
        <h1 class="font-bold italic text-3xl">
            <a href="/" class="text-green-600 hover:text-green-500" aria-label="Home">
                Green phone
            </a>
        </h1>
        <nav>
            <ul class="flex items-center gap-2 cursor-pointer">
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="bg-green-500 text-white font-semibold rounded px-4 py-2 ">
                            Login
                        </a>
                    </li>
                @endguest

                @auth
                    <li>
                        <a href="{{ route('repair') }}" class="bg-green-500 text-white font-semibold rounded px-4 py-2">
                            Start now!
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('order') }}" class="font-semibold rounded  hover:bg-gray-200 p-2">
                            Track my order
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="font-semibold rounded  hover:bg-gray-200 p-2">
                            Contact us
                        </a>
                    </li>

                    <form action="/logout" method="post" id="delete-form">
                        @csrf
                        <button type="submit" form="delete-form" class="font-semibold text-red-600 hover:text-red-500">
                            LogOut
                        </button>
                    </form>
                @endauth
            </ul>
        </nav>
    </header>

    @if(session('success'))
        <div class="bg-green-300 my-5 text-white font-semibold py-3 px-2 text-center rounded-md w-1/2 mx-auto mb-4">
            {{ session("success") }}
        </div>
    @endif

    <main class="p-2 grid grid-cols-1 gap-5 md:p-5 pb-5">
        {{$slot}}
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-10">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="text-center md:text-left mb-4 md:mb-0">
                <p class="text-lg font-semibold">Green Phone</p>
                <p class="text-sm">Télécommunications & Services</p>
                <p class="text-sm">Casablanca-Settat, Maroc</p>
            </div>
            <div class="text-center mt-4 text-sm">
                <p>&copy; 2025 Green Phone. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
