<x-layouts.app>
    <div class="flex flex-col w-full gap-4">
        <span class="text-2xl font-semibold">Payment</span>

        <div class="w-full border border-gray-300 rounded-lg text-md">
            <table class="w-full table-auto">
                <thead class="bg-gray-200">
                    <tr class="text-sm text-left text-gray-700">
                        <th class="p-3 w-full">Nama</th>
                        <th class="px-5 py-3 text-center w-fit">Status</th>
                        <th class="px-5 py-3 text-center w-fit">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-3 w-full">{{ $payment->person->name }}</td>
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
                        <td class="px-5 py-3 text-center flex gap-2">
                            <a class="px-4 py-2 rounded-md outline outline-gray-200 transition-all ease-in-out hover:bg-gray-200/80 select-none"
                                href="">Show</a>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-4 py-2 rounded-md bg-red-700 text-white transition-all ease-in-out hover:bg-red-800 select-none text-nowrap"
                                    onclick="return confirm('Are you sure you want to delete this person?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>