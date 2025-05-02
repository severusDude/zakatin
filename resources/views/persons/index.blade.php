<x-layouts.app>
    <div class="flex flex-col w-full gap-4">
        <span class="text-2xl font-semibold">Warga</span>

        <form method="GET" class="flex gap-4">

            <input type="text" name="search" placeholder="Cari..." value="{{ request('search') }}"
                class="w-1/3 px-4 py-2 rounded-lg outline outline-gray-200 focus:outline-black transition-all ease-in-out">

            <!-- Filter by category -->
            <div class="w-fit md:w-fit">
                <select name="category"
                    class="w-fit px-4 py-2 rounded-lg outline outline-gray-200 focus:outline-black transition-all ease-in-out">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category')==$category->id ? 'selected' : '' }}>
                        {{ $category->label }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="px-4 py-2 bg-accent text-white rounded-lg">Submit</button>
        </form>

        <span class="pl-2 text-1xl font-semibold">{{ $persons->count() }} Warga ditemukan</span>

        <div class="w-full border border-gray-300 rounded-lg text-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-200">
                    <tr class="text-sm text-left text-gray-700">
                        <th class="p-3 w-full">Nama</th>
                        <th class="px-5 py-3 text-center">Kategori</th>
                        <th class="px-5 py-3 text-center w-fit">Status</th>
                        <th class="px-5 py-3 text-center w-fit">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persons as $person)
                    <tr class="border-t hover:bg-gray-50">
                        <a href="{{ route('persons.show', $person->id) }}">
                            <td class="p-3 w-full">{{ $person->name }}</td>
                            <td class="px-5 py-3 w-fit text-nowrap">{{ $person->category->label }}</td>
                            <td class="px-5 py-3 w-fit">
                                @if ($person->has_paid)
                                <span
                                    class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sudah
                                    Bayar</span>
                                @else
                                <span
                                    class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Belum
                                    Bayar</span>
                                @endif
                            </td>
                            <td class="px-5 py-3 text-center flex gap-2">
                                <a class="px-4 py-2 rounded-md outline outline-gray-200 transition-all ease-in-out hover:bg-gray-200/80 select-none"
                                    href="{{ route('persons.show', $person->id) }}">Show</a>
                                <form action="{{ route('persons.destroy', $person->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 rounded-md bg-red-700 text-white transition-all ease-in-out hover:bg-red-800 select-none text-nowrap"
                                        onclick="return confirm('Are you sure you want to delete this person?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-layouts.app>