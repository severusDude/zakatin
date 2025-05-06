<x-layouts.app>
    <header class="w-full flex justify-between items-center my-4">
        <a href="{{ route('payments.index') }}" class="flex gap-2 items-center">
            <x-heroicon-o-arrow-left width="24" height="24" />
            <h1 class="text-3xl font-bold">{{ $payment->person->name }}</h1>
        </a>
        <div class="flex gap-2">
            <a href="{{ route('payments.edit', $payment->id) }}"
                class="px-4 py-2 rounded-md outline outline-gray-200 transition hover:bg-gray-200/80 select-none">
                Edit
            </a>
            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" class="inline">
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
            <input type="text" name="name" class="w-full p-4 outline outline-gray-200 rounded-lg text-black" readonly
                value="{{ $payment->person->name }}" />
        </div>

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Deskripsi</h2>
            <textarea name="description" class="w-full p-4 outline outline-gray-200 rounded-lg text-black" readonly
                rows="4">{{ $payment->person->description ?? 'Tidak ada deskripsi' }}</textarea>
        </div>

        <div class="space-y-2">
            <h2 class="text-lg font-medium text-gray-700">Pembayaran</h2>

            <div class="w-full text-md">
                <table class="w-full table-auto">
                    <thead class="border-b border-black">
                        <tr class="text-sm text-left text-gray-700">
                            <th class="p-3 w-full">Nama</th>
                            <th class="px-5 py-3 text-center">Tahun</th>
                            <th class="px-5 py-3 text-center w-fit">Tipe</th>
                            <th class="px-5 py-3 text-center w-fit">Nominal</th>
                            <th class="px-5 py-3 text-center w-fit">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-3 w-full">{{ $payment->person->name }}</td>
                            <td class="px-5 py-3 w-fit text-nowrap text-center">
                                <span
                                    class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                    {{ $payment->year }}
                                </span>
                            </td>
                            <td class="px-5 py-3 w-fit text-nowrap text-center">
                                <span
                                    class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                    {{ $payment->type }}
                                </span>
                            </td>
                            <td class="px-5 py-3 w-fit text-nowrap text-center">
                                <span
                                    class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
                                    {{ $payment->amount }}
                                </span>
                            </td>
                            <td class="px-5 py-3 w-fit">
                                @if ($payment->status)
                                <span
                                    class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sudah
                                    Bayar</span>
                                @else
                                <span
                                    class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Belum
                                    Bayar</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layouts.app>