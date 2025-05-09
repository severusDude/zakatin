<x-layouts.app :title="__('Dashboard')">
    <header>
        <h1 class="text-2xl font-semibold">{{ __('Dashboard') }}</h1>
    </header>
    <hr class="my-4">
    <div class="flex flex-col w-full max-h-screen gap-8">

        <div class="flex items-center justify-between w-full p-6 rounded-lg bg-gray-50 outline outline-gray-200 h-fit">
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <h2 class="text-2xl font-bold">
                        Maret 2025
                    </h2>
                </div>
                <span class="text-gray-700">
                    Laporan zakat masuk dan distribusi zakat
                </span>
            </div>
            <div class="flex items-center gap-2">
                <flux:icon name="chevron-left" />
                <span class="text-lg font-semibold">2025</span>
                <flux:icon name="chevron-right" />
            </div>
        </div>

        <div class="flex w-full gap-6">
            <div class="flex flex-col w-full p-4 rounded-lg h-60 outline outline-gray-200">
                <div class="flex items-center gap-4">
                    <div class="bg-gray-200 rounded-full size-16"></div>
                    <div class="space-y-2">
                        <h3 class="text-sm text-gray-700">Jumlah Warga</h3>
                        <span class="text-2xl font-bold">200</span>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 rounded-lg h-60 outline outline-gray-200">
                <div class="flex items-center gap-4">
                    <div class="bg-gray-200 rounded-full size-16"></div>
                    <div class="space-y-2">
                        <h3 class="text-sm text-gray-700">Pengumpulan Zakat</h3>
                        <span class="text-2xl font-bold">200</span>
                    </div>
                </div>

            </div>
            <div class="w-full p-4 rounded-lg h-60 outline outline-gray-200">
                <div class="flex items-center gap-4">
                    <div class="bg-gray-200 rounded-full size-16"></div>
                    <div class="space-y-2">
                        <h3 class="text-sm text-gray-700">Distribusi Zakat</h3>
                        <span class="text-2xl font-bold">200</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="w-full p-6 space-y-4 rounded-lg bg-gray-50 outline outline-gray-200">
            <h1 class="text-xl font-bold">Pengumpulan Zakat</h1>
            <div class="flex flex-col gap-3">

            </div>
        </div>
        <div class="flex flex-col w-full p-6 rounded-lg bg-gray-50 outline outline-gray-200">
            <h1 class="text-xl font-bold">Distribusi Zakat</h1>
        </div>
        <div class="flex flex-col w-full p-6 rounded-lg bg-gray-50 outline outline-gray-200">
            <h1 class="text-xl font-bold">Asnaf Lainnya</h1>
        </div> --}}
    </div>
</x-layouts.app>