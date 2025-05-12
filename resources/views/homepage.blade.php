<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="flex flex-col items-center min-h-screen scroll-smooth">
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md shadow-sm transition-all duration-300 hover:bg-white">
        <div class="px-[15%] py-4 w-full flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                <div class="relative w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-lg flex items-center justify-center overflow-hidden animate-[float_3s_ease-in-out_infinite]">
                    <div class="absolute inset-0 bg-white/10">
                        <div class="absolute w-full h-full animate-[wave_2s_linear_infinite]" 
                            style="background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transform: translateX(-100%);">
                        </div>
                    </div>
                    <span class="text-2xl font-bold text-white relative z-10 transform transition-all duration-500 animate-[glow_2s_ease-in-out_infinite]">Z</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white/20 animate-[shine_3s_ease-in-out_infinite]"></div>
                </div>
                <span class="text-2xl font-bold text-primary-600 group-hover:text-primary-700 transition-all duration-300">Zakatin</span>
            </a>
            <nav class="hidden md:block">
                <ul class="flex items-center space-x-8">
                    <li class="group relative">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                            class="text-gray-700 font-medium transition-all duration-300 hover:text-primary-600 py-2 px-4 relative overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:rotate-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Beranda
                            </span>
                            <div class="absolute inset-0 bg-primary-50/0 group-hover:bg-primary-50 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                            <div class="absolute bottom-0 left-1/2 w-2 h-2 bg-primary-600 rounded-full transform -translate-x-1/2 scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                        </x-nav-link>
                    </li>
                    <li class="group relative">
                        <x-nav-link :href="route('home').'#tentang'"
                            class="text-gray-700 font-medium transition-all duration-300 hover:text-primary-600 py-2 px-4 relative overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:rotate-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Tentang
                            </span>
                            <div class="absolute inset-0 bg-primary-50/0 group-hover:bg-primary-50 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                            <div class="absolute bottom-0 left-1/2 w-2 h-2 bg-primary-600 rounded-full transform -translate-x-1/2 scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                        </x-nav-link>
                    </li>
                    <li class="group relative">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')"
                            class="text-gray-700 font-medium transition-all duration-300 hover:text-primary-600 py-2 px-4 relative overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:rotate-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                Program
                            </span>
                            <div class="absolute inset-0 bg-primary-50/0 group-hover:bg-primary-50 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                            <div class="absolute bottom-0 left-1/2 w-2 h-2 bg-primary-600 rounded-full transform -translate-x-1/2 scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
    
            
            <button class="md:hidden text-gray-700 hover:text-primary-600 focus:outline-none transform hover:scale-110 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    
        
        <div class="hidden md:hidden px-[15%] py-4 bg-white/95 backdrop-blur-md border-t transform transition-all duration-300">
            <ul class="space-y-4">
                <li class="transform hover:-translate-x-2 transition-transform duration-300">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" 
                        class="block text-gray-700 hover:text-primary-600 font-medium transition-colors px-4 py-2 rounded-md hover:bg-primary-50">
                        Beranda
                    </x-nav-link>
                </li>
                <li class="transform hover:-translate-x-2 transition-transform duration-300">
                    <x-nav-link :href="route('home').'#tentang'"
                        class="block text-gray-700 hover:text-primary-600 font-medium transition-colors px-4 py-2 rounded-md hover:bg-primary-50">
                        Tentang
                    </x-nav-link>
                </li>
                <li class="transform hover:-translate-x-2 transition-transform duration-300">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')"
                        class="block text-gray-700 hover:text-primary-600 font-medium transition-colors px-4 py-2 rounded-md hover:bg-primary-50">
                        Program
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </header>

    <section
        style="background-image: url('{{ asset('images/banner.png') }}');"
        class="flex flex-col items-center justify-center w-full h-screen bg-center bg-no-repeat bg-cover relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="particles-container"></div>
        </div>
        
        <div class="flex flex-col items-center gap-6 text-accent-foreground relative z-10">
            <h1 class="font-bold text-6xl w-[60%] text-center animate-[fadeInDown_1s_ease-out] text-white">
                Salurkan Zakat Anda dengan Aman dan Terpercaya
            </h1>
            <span class="text-gray-300 animate-[fadeInUp_1s_ease-out_0.3s] text-lg">
                Ayo salurkan zakatmu dengan mudah dan cepat
            </span>
            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4 animate-[fadeInUp_1s_ease-out_0.6s]">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="inline-block px-6 py-3 font-medium leading-normal transition-all duration-500 border-2 border-transparent rounded-lg bg-primary-600 text-white hover:bg-transparent hover:border-primary-500 hover:text-primary-500 text-md group">
                    <span class="flex items-center gap-2">
                        <span>Dashboard</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </span>
                </a>
                @else
                <a href="{{ route('login') }}"
                    class="inline-block px-6 py-3 font-medium leading-normal transition-all duration-500 border-2 border-transparent rounded-lg bg-primary-600 text-white hover:bg-transparent hover:border-primary-500 hover:text-primary-500 text-md group">
                    <span class="flex items-center gap-2">
                        <span>Log in</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </span>
                </a>
    
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="inline-block px-6 py-3 border-2 border-primary-500 font-medium text-primary-500 hover:bg-primary-600 hover:text-white transition-all duration-500 rounded-lg text-md leading-normal group">
                    <span class="flex items-center gap-2">
                        <span>Register</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </section>

    <section id="tentang" class="flex flex-col items-center w-full gap-8 py-16 px-[15%]">
        <h1 class="text-3xl font-semibold text-primary-600">Tentang Kami</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
            <div
                class="flex flex-col items-center text-center p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="p-4 mb-4 rounded-full bg-primary-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2-2m10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium mb-2">Aman & Terpercaya</h3>
                <p class="text-gray-600">Kami menjamin keamanan dana zakat Anda dengan sistem yang transparan dan
                    terpercaya. Setiap donasi terverifikasi dan dilindungi.</p>
            </div>
            <div
                class="flex flex-col items-center text-center p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="p-4 mb-4 rounded-full bg-primary-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium mb-2">Distribusi Tepat Sasaran</h3>
                <p class="text-gray-600">Dana zakat disalurkan langsung kepada mustahik yang membutuhkan melalui
                    program-program berkelanjutan dan terukur.</p>
            </div>
            <div
                class="flex flex-col items-center text-center p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="p-4 mb-4 rounded-full bg-primary-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-primary-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium mb-2">Mudah & Cepat</h3>
                <p class="text-gray-600">Proses penyaluran zakat yang praktis dan efisien melalui platform digital
                    dengan berbagai metode pembayaran.</p>
            </div>
        </div>

        <div class="mt-12 text-center w-full max-w-3xl">
            <div class="relative group p-8 mb-12 border border-primary-200 rounded-2xl bg-white/80 backdrop-blur-sm hover:shadow-xl transition-all duration-500 hover:border-primary-400">
                <div class="absolute -inset-px bg-gradient-to-r from-primary-500 to-primary-700 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl font-semibold text-primary-700 mb-6 relative inline-block">
                        Visi Kami
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-primary-500 to-primary-700 rounded-full transform origin-left"></div>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg group-hover:text-gray-700 transition-colors">
                        Menjadi platform penyaluran zakat terpercaya yang berperan aktif dalam mewujudkan kesejahteraan umat dan mengentaskan kemiskinan di Indonesia.
                    </p>
                </div>
                <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-primary-500 rounded-tl-xl"></div>
                <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-primary-500 rounded-tr-xl"></div>
                <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-primary-500 rounded-bl-xl"></div>
                <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-primary-500 rounded-br-xl"></div>
            </div>
        
            
            <div class="relative group p-8 border border-primary-200 rounded-2xl bg-white/80 backdrop-blur-sm hover:shadow-xl transition-all duration-500 hover:border-primary-400">
                <div class="absolute -inset-px bg-gradient-to-r from-primary-500 to-primary-700 rounded-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <h2 class="text-2xl font-semibold text-primary-700 mb-6 relative inline-block">
                        Misi Kami
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-primary-500 to-primary-700 rounded-full transform origin-left"></div>
                    </h2>
                    <ul class="text-gray-600 space-y-4">
                        <li class="group/item flex items-center gap-3 p-3 rounded-xl border border-primary-100 hover:border-primary-300 hover:bg-primary-50/50 transition-all duration-300">
                            <span class="w-2 h-2 bg-primary-500 rounded-full group-hover/item:scale-150 transition-transform duration-300"></span>
                            <span class="text-left">Menghimpun dan menyalurkan dana zakat secara profesional, transparan, dan akuntabel</span>
                        </li>
                        <li class="group/item flex items-center gap-3 p-3 rounded-xl border border-primary-100 hover:border-primary-300 hover:bg-primary-50/50 transition-all duration-300">
                            <span class="w-2 h-2 bg-primary-500 rounded-full group-hover/item:scale-150 transition-transform duration-300"></span>
                            <span class="text-left">Mengoptimalkan potensi zakat untuk pemberdayaan ekonomi umat</span>
                        </li>
                        <li class="group/item flex items-center gap-3 p-3 rounded-xl border border-primary-100 hover:border-primary-300 hover:bg-primary-50/50 transition-all duration-300">
                            <span class="w-2 h-2 bg-primary-500 rounded-full group-hover/item:scale-150 transition-transform duration-300"></span>
                            <span class="text-left">Memudahkan akses masyarakat dalam menunaikan kewajiban berzakat</span>
                        </li>
                        <li class="group/item flex items-center gap-3 p-3 rounded-xl border border-primary-100 hover:border-primary-300 hover:bg-primary-50/50 transition-all duration-300">
                            <span class="w-2 h-2 bg-primary-500 rounded-full group-hover/item:scale-150 transition-transform duration-300"></span>
                            <span class="text-left">Mengedukasi masyarakat tentang pentingnya zakat dalam kehidupan sosial dan ekonomi</span>
                        </li>
                    </ul>
                </div>
                <div class="absolute top-0 left-0 w-4 h-4 border-t-2 border-l-2 border-primary-500 rounded-tl-xl"></div>
                <div class="absolute top-0 right-0 w-4 h-4 border-t-2 border-r-2 border-primary-500 rounded-tr-xl"></div>
                <div class="absolute bottom-0 left-0 w-4 h-4 border-b-2 border-l-2 border-primary-500 rounded-bl-xl"></div>
                <div class="absolute bottom-0 right-0 w-4 h-4 border-b-2 border-r-2 border-primary-500 rounded-br-xl"></div>
            </div>
        </div>
    </section>

    <footer class="w-full bg-gradient-to-br from-primary-900 to-primary-800 text-white py-16 relative overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute w-96 h-96 bg-primary-700/10 rounded-full -top-48 -left-48 blur-3xl animate-pulse"></div>
            <div class="absolute w-96 h-96 bg-primary-800/10 rounded-full -bottom-48 -right-48 blur-3xl animate-pulse delay-1000"></div>
        </div>
    
        <div class="container mx-auto px-[15%] relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="mb-6 group">
                    <h3 class="text-xl font-bold mb-4 relative inline-block">
                        {{ config('app.name') }}
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-primary-500 to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </h3>
                    <p class="text-gray-300 group-hover:text-white transition-colors duration-300">
                        Platform penyaluran zakat terpercaya untuk membantu mereka yang membutuhkan dengan cara yang mudah, aman, dan transparan.
                    </p>
                </div>
    
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-6 relative inline-block group-hover:text-white">
                        Kontak
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-primary-500 to-transparent"></div>
                    </h3>
                    <ul class="space-y-4 text-gray-300">
                        <li class="group flex items-start gap-3 hover:translate-x-2 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 flex-shrink-0 text-primary-400 group-hover:text-primary-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="group-hover:text-white transition-colors">Lorem Ipsum</span>
                        </li>
                        <li class="group flex items-center gap-3 hover:translate-x-2 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-primary-400 group-hover:text-primary-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="group-hover:text-white transition-colors">test@example.com</span>
                        </li>
                        <li class="group flex items-center gap-3 hover:translate-x-2 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-primary-400 group-hover:text-primary-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="group-hover:text-white transition-colors">+62 000 0000 000</span>
                        </li>
                    </ul>
                </div>
    
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-6 relative inline-block">
                        Ikuti Kami
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-primary-500 to-transparent"></div>
                    </h3>
                    <div class="flex space-x-6">
                        <a href="#" class="group">
                            <div class="relative p-3 rounded-full bg-primary-800/50 hover:bg-primary-700/50 transition-all duration-300 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/20 to-primary-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <svg class="h-6 w-6 text-gray-300 group-hover:text-white transition-colors relative z-10 group-hover:scale-110 transform duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div class="relative p-3 rounded-full bg-primary-800/50 hover:bg-primary-700/50 transition-all duration-300 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/20 to-primary-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <svg class="h-6 w-6 text-gray-300 group-hover:text-white transition-colors relative z-10 group-hover:scale-110 transform duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                        <a href="#" class="group">
                            <div class="relative p-3 rounded-full bg-primary-800/50 hover:bg-primary-700/50 transition-all duration-300 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-primary-500/20 to-primary-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <svg class="h-6 w-6 text-gray-300 group-hover:text-white transition-colors relative z-10 group-hover:scale-110 transform duration-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-8 mt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>

</html>

<style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes wave {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }

    @keyframes glow {
        0%, 100% {
            text-shadow: 0 0 5px rgba(255,255,255,0.8);
        }
        50% {
            text-shadow: 0 0 20px rgba(255,255,255,0.8);
        }
    }

    @keyframes shine {
        0%, 100% {
            opacity: 0.5;
        }
        50% {
            opacity: 0.8;
        }
    }
</style>

<!-- Tambahkan di bagian head atau sebelum closing body -->
<style>
.particles-container {
    position: absolute;
    width: 100%;
    height: 100%;
    background: transparent;
}

.particles-container::before,
.particles-container::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: particleAnimation 20s linear infinite;
}

.particles-container::after {
    background-size: 30px 30px;
    animation-duration: 15s;
    opacity: 0.5;
}

@keyframes particleAnimation {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-100%);
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Hover effect untuk tombol */
.group:hover svg {
    animation: buttonIconBounce 0.5s ease-in-out;
}

@keyframes buttonIconBounce {
    0%, 100% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(5px);
    }
}
</style>
