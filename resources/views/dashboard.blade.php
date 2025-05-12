<x-layouts.app :title="__('Dashboard')">
    <header class="flex items-center justify-between w-full">
        <h1 class="text-2xl font-semibold">{{ __('Dashboard') }}</h1>
        <div class="flex gap-2 w-fit">
            <a href="{{ route('reports.download') }}?format=pdf" target="_blank"
                class="flex items-center gap-2 px-4 py-3 rounded-md outline outline-gray-200 hover:bg-gray-200 transition-all ease-in-out">
                <flux:icon.download width="16" height="16" />
                <span class="font-semibold">{{ __('PDF') }}</span>
            </a>
            <a href="{{ route('reports.download') }}?format=docx" target="_blank"
                class="flex items-center gap-2 px-4 py-3 rounded-md outline outline-gray-200 hover:bg-gray-200 transition-all ease-in-out">
                <flux:icon.download width="16" height="16" />
                <span class="font-semibold">{{ __('DOCX') }}</span>
            </a>
        </div>
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

        <div class="flex flex-col w-full gap-6">
            <div class="flex w-full gap-6">
                <div class="flex flex-col w-full p-4 rounded-lg h-fit outline outline-gray-200">
                    <div class="flex items-center gap-4">
                        <div class="bg-gray-100 rounded-lg size-16 flex items-center justify-center">
                            <flux:icon.users width="16" height="16" />
                        </div>
                        <div class="space-y-1 h-full">
                            <h3 class="text-gray-700">{{ __('Jumlah Warga') }}</h3>
                            <span class="text-2xl font-bold">{{ $statistic['persons'] }} Warga</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full p-4 rounded-lg h-fit outline outline-gray-200">
                    <div class="flex items-center gap-4">
                        <div class="bg-gray-100 rounded-lg size-16 flex items-center justify-center">
                            <flux:icon.money width="16" height="16" />
                        </div>
                        <div class="space-y-1 h-full">
                            <h3 class="text-gray-700">{{ __('Total Uang') }}</h3>
                            <span class="text-2xl font-bold">Rp {{ $statistic['collectedMoney'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full p-4 rounded-lg h-fit outline outline-gray-200">
                    <div class="flex items-center gap-4">
                        <div class="bg-gray-100 rounded-lg size-16 flex items-center justify-center">
                            <flux:icon.bag width="16" height="16" />
                        </div>
                        <div class="space-y-1 h-full">
                            <h3 class="text-gray-700">{{ __('Total Beras') }}</h3>
                            <span class="text-2xl font-bold">{{ $statistic['collectedRice'] }} Kg</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-between gap-4">
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Total Muzakki') }}</h3>
                    <span class="text-2xl font-bold">{{ $statistic['payments'] }} orang</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Total Mustahiq') }}</h3>
                    <span class="text-2xl font-bold">{{ $statistic['mustahiq'] }} orang</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Zakat Uang') }}</h3>
                    <span class="text-2xl font-bold">Rp {{ $statistic['collectedMoney'] }}</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Zakat Beras') }}</h3>
                    <span class="text-2xl font-bold">{{ $statistic['collectedRice'] }} Kg</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Distribusi Uang') }}</h3>
                    <span class="text-2xl font-bold">Rp {{ $statistic['distributed']['uang'] }}</span>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <h3 class="text-gray-700">{{ __('Distribusi Beras') }}</h3>
                    <span class="text-2xl font-bold">{{ $statistic['distributed']['beras'] }} Kg</span>
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