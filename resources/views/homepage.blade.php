<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="flex flex-col items-center min-h-screen lg:justify-center scroll-smooth">
    <header class="px-[15%] py-6 w-full text-sm not-has-[nav]:hidden flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-3xl font-bold text-primary-600">
            {{ config('app.name') }}
        </a>
        <nav>
            <ul class="flex">
                <li class="flex items-center gap-2">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                    <x-nav-link :href="route('home').'#tentang'">Tentang</x-nav-link>
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">Home</x-nav-link>
                </li>
            </ul>
        </nav>

    </header>

    <section
        style="background-image: url('{{ asset('images/banner.png') }}'); background-color: rgba(0, 0, 0, 0.6); background-blend-mode: overlay;"
        class="flex flex-col items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover">
        <div class="flex flex-col items-center gap-6 text-accent-foreground ">
            <h1 class="font-bold text-6xl w-[60%] text-center">Salurkan Zakat Anda dengan Aman dan Terpercaya</h1>
            <span class="text-gray-400">Ayo salurkan zakatmu dengan mudah dan cepat</span>
            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-2 font-medium leading-normal transition-all ease-in-out border border-transparent rounded-md bg-primary-600 text-primary-50 hover:bg-primary-600/90 hover:border-primary-500 text-md">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="inline-block px-5 py-2 font-medium leading-normal transition-all ease-in-out border border-transparent rounded-md bg-primary-600 text-primary-50 hover:bg-primary-600/90 hover:border-primary-500 text-md">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block px-5 py-2 border border-primary-600 font-medium text-primary-500 hover:text-primary-50 hover:bg-primary-600/90 hover:border-primary-500 transition-all ease-in-out rounded-md text-md leading-normal">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </section>

    <section class="flex flex-col items-center w-full gap-6 py-12">
        <h1 id="tentang" class="text-3xl font-semibold">Tentang</h1>
    </section>

</body>

</html>