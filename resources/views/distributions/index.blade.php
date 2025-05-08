<x-layouts.app>
    <div class="flex flex-col w-full gap-4">
        <span class="text-2xl font-semibold">Distribusi Zakat</span>

        <div class="w-full flex justify-between">

            <form method="GET" class="flex gap-4 w-2/3">

                <input type="text" name="search" placeholder="Cari..." value="{{ request('search') }}"
                    class="w-full px-4 py-2 rounded-lg outline outline-gray-200 focus:outline-black transition-all ease-in-out">

                <button type="submit"
                    class="px-4 py-2 bg-accent text-accent-foreground rounded-lg hover:bg-accent/95 transition-all ease-in-out">Submit</button>
            </form>
            <a href="{{ route('distributions.create') }}"
                class="flex gap-2 px-4 py-2 bg-accent text-accent-foreground rounded-lg hover:bg-accent/95 transition-all ease-in-out select-none">
                <flux:icon.plus /> Tambah
            </a>
        </div>

        <span class="pl-2 text-1xl font-semibold">{{ $distributions->count() }} Distribusi ditemukan</span>

        <div class="w-full border border-gray-300 rounded-lg text-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-200">
                    <tr class="text-sm text-left text-gray-700">
                        <th class="p-3 w-full">Nama</th>
                        <th class="px-5 py-3 text-center w-fit">Tahun</th>
                        <th class="px-5 py-3 text-center w-fit">Tipe</th>
                        <th class="px-5 py-3 text-center w-fit">Nominal</th>
                        <th class="px-5 py-3 text-center w-fit">Status</th>
                        <th class="px-5 py-3 text-center w-fit">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($distributions as $distribution)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3 w-full">{{ $distribution->person->name }}</td>
                        <td class="px-5 py-3 w-fit text-nowrap text-center">
                            <span
                                class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                {{ $distribution->year }}
                            </span>
                        </td>
                        <td class="px-5 py-3 w-fit text-nowrap text-center">
                            <span
                                class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                {{ $distribution->type }}
                            </span>
                        </td>
                        <td class="px-5 py-3 w-fit text-nowrap text-center">
                            <span
                                class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                {{ $distribution->amount }}
                            </span>
                        </td>
                        <td class="px-5 py-3 w-fit">
                            @if ($distribution->status)
                            <span
                                class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sudah
                                Bayar</span>
                            @else
                            <span
                                class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Belum
                                Bayar</span>
                            @endif
                        </td>
                        <td class="px-5 py-3 text-center flex gap-2">
                            <a class="px-4 py-2 rounded-md @if ($distribution->status) text-accent-foreground bg-accent hover:bg-accent/95 @else outline outline-gray-200 hover:bg-gray-200/80 @endif transition-all ease-in-out select-none "
                                href="{{ route('distributions.show', $distribution->id) }}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>