<x-layouts.app>

    <header class="w-full flex justify-between items-center my-4">
        <a href="{{ route('payments.index') }}" class="flex gap-2 items-center">
            <x-heroicon-o-arrow-left width="24" height="24" />
            <h1 class="text-2xl font-bold">{{ __('Tambah Zakat') }}</h1>
        </a>
    </header>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        <section class="flex flex-col gap-4">

            <div class="space-y-2">
                <h2 class="text-lg font-semibold text-gray-700">Warga</h2>
                <select name="person_id"
                    class="w-fit px-4 py-2 rounded-lg outline outline-gray-200 focus:outline-black transition-all ease-in-out"
                    required>
                    <option value="">Pilih Warga</option>
                    @foreach ($persons as $person)
                    <option value="{{ $person->id }}">{{ $person->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="space-y-2">
                <h2 class="text-lg font-semibold text-gray-700">Tahun</h2>
                <select name="year" required>
                    <option value="2025">2025</option>
                </select>
            </div>
            <div class="space-y-2">
                <h2 class="text-lg font-semibold text-gray-700">Jenis</h2>
                <select name="type" required>
                    <option value="uang">Moneyyy</option>
                    <option value="beras">Beras</option>
                </select>
            </div>
            <div class="space-y-2" required>
                <h2 class="text-lg font-semibold text-gray-700">Jumlah</h2>
                <input type="text" name="amount" class="w-full p-4 outline outline-gray-200 rounded-lg text-black"
                    placeholder="Jumlah..." />
            </div>

            <div class="w-full flex justify-center space-y-4">
                <button type="submit"
                    class="w-full px-4 py-3 bg-accent transition-all ease-in-out hover:bg-accent/95 text-white p-4 rounded-lg">Tambah</button>
            </div>
        </section>
    </form>
</x-layouts.app>