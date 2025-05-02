<x-layouts.app>
    <header class="w-full flex justify-between items-center my-4">
        <a href="{{ url()->previous() }}" class="flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
            <h1 class="text-3xl font-bold">{{ $person->name }}</h1>
        </a>
        <div class="flex gap-2">
            <a href="{{ route('persons.edit', $person->id) }}"
                class="px-4 py-2 rounded-md outline outline-gray-200 transition hover:bg-gray-200/80 select-none">
                Edit
            </a>
            <form action="{{ route('persons.destroy', $person->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-4 py-2 rounded-md bg-red-700 text-white transition-all ease-in-out hover:bg-red-800 select-none text-nowrap"
                    onclick="return confirm('Are you sure you want to delete this person?')">
                    Delete
                </button>
            </form>
        </div>
    </header>

    <section class="space-y-2">

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Nama</h2>
            <div class="p-4 outline outline-gray-200 rounded-lg">
                <p class="text-black">{{ $person->name }}</p>
            </div>
        </div>

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Deskripsi</h2>
            <div class="p-4 outline outline-gray-200 rounded-lg">
                <p class="text-black">{{ $person->description ?? 'Tidak ada deskripsi' }}</p>
            </div>
        </div>

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Kategori</h2>
            <div class="px-3 py-1.5 rounded-full bg-gray-100 font-semibold w-fit">
                <p class="text-gray-700 text-sm">{{ $person->category->label }}</p>
            </div>
        </div>

        @if ($person->familyMembers->isNotEmpty())

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Anggota Keluarga</h2>

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
                        @foreach ($person->familyMembers as $member)
                        <tr class="border-t hover:bg-gray-50">
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
        @endif
    </section>
</x-layouts.app>