<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eventos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/scss/app.scss')

    </head>
    <body class="bg-[#F9FAFB] pb-[100px]">
        <header class="bg-[#0B0434]">
            <div class="lg:container mx-auto items-center">
                <div class="flex items-center">
                    <div class="flex items-center text-white">
                        logo
                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a
                                    href="{{ url('/eventos') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Log in
                                </a>
    
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Registrar
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif

                </div>
            </div>
        </header>

        <section class="banner">
            <div class="lg:container mx-auto flex flex-col justify-end items-center h-full">
                <div class="h-full flex justify-end items-center">
                    <h1 class="text-5xl text-white">find your way.</h1>
                </div>
            </div>
        </section>
        <livewire:home-page>
    </body>
</html>
