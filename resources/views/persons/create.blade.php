<x-layouts.app>
    <form action="{{ route('persons.store') }}" method="POST">
        @csrf

        <header class="w-full flex justify-between items-center my-4">
            <a href="{{ route('persons.index') }}" class="flex gap-2 items-center">
                <x-heroicon-o-arrow-left width="24" height="24" />
                <h1 class="text-3xl font-bold">{{ __('Tambahkan Warga') }}</h1>
            </a>
            <div class="flex gap-2">
                <button type="submit"
                    class="px-4 py-2 rounded-md bg-accent transition-all ease-in-out hover:bg-accent/95 text-accent-foreground">
                    Save
                </button>
            </div>
        </header>

        <section class="space-y-2">

            <div class="space-y-2">
                <h2 class="text-lg font-medium text-gray-700">Nama</h2>
                <input type="text" name="name" class="w-full p-4 outline outline-gray-200 rounded-lg text-black"
                    placeholder="Nama" />
            </div>

            <div class="space-y-2">
                <h2 class="text-lg font-medium text-gray-700">Deskripsi</h2>
                <textarea name="description" class="w-full p-4 outline outline-gray-200 rounded-lg text-black" rows="4"
                    placeholder="Deskripsi..."></textarea>
            </div>

            <div class="space-y-2">
                <h2 class="text-lg font-medium text-gray-700">Kategori</h2>
                <div class="w-fit md:w-fit">
                    <select name="category_id"
                        class="w-fit px-4 py-2 rounded-lg outline outline-gray-200 focus:outline-black transition-all ease-in-out">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- @if ($person->familyMembers->isNotEmpty())

            <div class="space-y-2">
                <h2 class="text-lg font-medium text-gray-700">Anggota Keluarga</h2>

                <div class="w-full border border-gray-300 rounded-lg text-md">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-200">
                            <tr class="text-sm text-left text-gray-700">
                                <th class="pl-3 py-3 w-fit"></th>
                                <th class="p-3 w-full">Nama</th>
                                <th class="px-5 py-3 text-center">Kategori</th>
                                <th class="px-5 py-3 text-center w-fit">Status</th>
                                <th class="px-5 py-3 text-center w-fit">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($person->familyMembers as $member)
                            <tr class="border-t hover:bg-gray-50">
                                <td class="pl-3 py-2 w-fit text-center">
                                    <input type="checkbox" name="member" value="{{ $member->id }}"
                                        wire:model="selectedMembers">
                                </td>
                                <td class="p-3 w-full">{{ $member->name }}</td>
                                <td class="px-5 py-3 w-fit text-nowrap">
                                    <span
                                        class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                        {{ $member->category->label }}
                                    </span>
                                </td>
                                <td class="px-5 py-3 w-fit">
                                    @if ($member->has_paid)
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sudah
                                        Bayar</span>
                                    @else
                                    <span
                                        class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Belum
                                        Bayar</span>
                                    @endif
                                </td>
                                <td class="px-5 py-2 w-fit text-center">
                                    <div
                                        class="w-fit p-2 rounded-md bg-gray-100 text-black hover:bg-gray-200/80 transition-all ease-in-out">
                                        <x-heroicon-o-x-mark width="20" height="20" />
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @else
            <div class="space-y-2">
                <h2 class="text-lg font-medium text-gray-700">Kepala Keluarga</h2>
                <a href="{{ $person->familyHead ? route('persons.show', $person->familyHead->id) : '#'}}">{{
                    $person->familyHead->name ?? 'Tidak ada kepala keluarga' }}</a>
            </div>
            @endif --}}
        </section>
    </form>
</x-layouts.app>