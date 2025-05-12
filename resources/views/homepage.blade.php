<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="flex flex-col items-center min-h-screen lg:justify-center">
    <header class="px-[15%] py-6 w-full text-sm not-has-[nav]:hidden flex items-center justify-between bg-gray-100">
        <a href="{{ url('/') }}" class="text-2xl font-semibold text-gray-900 dark:text-white">
            Placeholder
        </a>
        <nav>
            <ul class="flex items-center gap-4">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white">Home</a>
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
                    class="inline-block px-5 py-1.5 border border-gray-100 hover:border-white bg-gray-200 hover:bg-white text-black transition-all ease-in-out rounded-sm text-sm leading-normal">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 border border-gray-100 hover:border-white bg-gray-200 hover:bg-white text-black transition-all ease-in-out rounded-sm text-sm leading-normal">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block px-5 py-1.5 border border-gray-100 hover:border-white transition-all ease-in-out rounded-sm text-sm leading-normal">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </section>

    <section class="flex flex-col w-full gap-6 items-center py-12">
        <h1 class="text-3xl font-semibold">Tentang</h1>
    </section>

</body>

</html>