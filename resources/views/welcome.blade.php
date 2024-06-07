<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Katipunan ng Kabataan Youth Information System</title>
        <link rel="icon" href="{{ asset('/logo/sk-logo.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="bg-cover bg-center h-screen text-white" style="background-image: url('{{ asset('images/hero-photo-blur.jpg')}}');">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5 flex flex-row items-center justify-center">
            <img class="h-8 w-auto" src="{{asset('/logo/sk-logo.png')}}" alt="">
            <span class="text-xl font-bold text">KKYIS - Zone 3</span>
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        @auth
            <a href="{{ url('/admin') }}" class="text-sm font-semibold leading-6 text-gray-900">Dashboard<span aria-hidden="true">&rarr;</span></a>
        @else
            <a href="{{ url('/admin/login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        @endauth
        </div>
        </nav>
    </header>
    <section class="dark:bg-gray-900 bg-transparent">
    <div class="grid max-w-screen-xl px-4 py-16 mx-auto lg:gap-8 xl:gap-0 lg:py-48 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl xl:text-6xl dark:text-white drop-shadow-lg">Katipunan ng Kabataan Youth Information System</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">A comprehensive system to manage and support the youth programs and activities of Sangguniang Kabataan in Brgy. Zone 3, Catabla Baybay.</p>
            <a href="{{ url('/admin') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-red-500 border border-red-400 rounded-lg hover:bg-red-400 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Get Started
            </a>
        </div>
        <div class=" lg:col-span-5 lg:flex">
            <!-- <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup"> -->
            <img src="{{asset('logo/kk-logo.png')}}" alt="SK Officials">
        </div>
    </div>
</section>
    <x-footer />
    </div>

    </body>
</html>
