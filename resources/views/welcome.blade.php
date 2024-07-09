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
    <body class="bg-[#F9FAFB]">
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
                                    href="{{ url('/dashboard') }}"
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
        <seciton class="filters">
            <div class="lg:container mx-auto flex justify-center">
                <div class="container-filters w-[650px] h-[100px] bg-[#0B0434] mt-[-50px] rounded-xl p-[16px] flex justify-between">
                    <div class="item flex flex-col w-[32%] border-r-[1px] border-purple-950 pr-[32px]">
                        <label for="" class="text-white">Looking for</label>
                        <select class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none">
                            <option class="bg-purple-800">Choose one</option>
                            <option class="bg-purple-800">Concerts</option>
                            <option class="bg-purple-800">Shows</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="item flex flex-col w-[32%] border-r-[1px] border-purple-950 px-[32px]">
                        <label for="" class="text-white">Location</label>
                        <select class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none">
                            <option class="bg-purple-800">Choose one</option>
                            <option class="bg-purple-800">Concerts</option>
                            <option class="bg-purple-800">Shows</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="item flex flex-col w-[32%]">
                        <label for="" class="text-white">When</label>
                        <select class="bg-transparent text-white border-0 border-b-2 border-purple-500 h-full px-4 focus:outline-none">
                            <option class="bg-purple-800">Any date</option>
                            <option class="bg-purple-800">Concerts</option>
                            <option class="bg-purple-800">Shows</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
            </div>

        </seciton>

        <section class="events mt-[64px]">
            <div class="w-[1024px] mx-auto">
                <h2 class="text-3xl font-bold">Upcoming Events</h2>
                <div class="container-events grid grid-cols-3 justify-between mx-auto gap-[32px] mt-[32px] w-[1024px] mx-auto">
                    @for($i = 0; $i < 9; $i++)
                        <div class="event h-[350px] rounded-xl overflow-hidden shadow-md bg-[#ffffff]">
                            <div class="top-img h-[200px] w-full">
                                <img class="object-center object-cover w-full h-full" src="https://picsum.photos/id/237/300/300" alt="event">
                            </div>
                            <div class="body-card p-[24px]">
                                <div class="container-body flex gap-x-[32px] items-center">
                                    <div class="left">
                                        <div class="mes text-purple-500 font-bold">
                                            SEP
                                        </div>
                                        <div class="date font-bold">
                                            25
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="title font-bold">
                                            Lorem ipsum dolor
                                        </div>
                                        <div class="location mt-[16px] text-gray-500">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </body>
</html>
