<tr class="border-t hover:bg-gray-50">
    @if($showCheckbox)
    <td class="p-3 w-fit">
        <input type="checkbox" name="selected_payments[]" value="{{ $payment->id }}" @checked($isChecked)
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
    </td>
    @endif

    <td class="{{ $showCheckbox ? 'pr-3' : 'p-3' }} w-full">
        {{ $person->name }}
    </td>

    <td class="px-5 py-3 w-fit text-nowrap text-center">
        <span class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
            {{ $payment->year }}
        </span>
    </td>

    <td class="px-5 py-3 w-fit text-nowrap text-center">
        <span class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
            {{ $payment->type }}
        </span>
    </td>

    <td class="px-5 py-3 w-fit text-nowrap text-center">
        <span class="inline-block px-2 py-1 text-sm font-semibold text-gray-700 bg-gray-100 rounded-full">
            {{ $payment->amount }}
        </span>
    </td>

    <td class="px-5 py-3 w-fit">
        @if ($payment->status)
        <span class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">
            Sudah Bayar
        </span>
        @else
        <span class="inline-block text-nowrap px-2 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">
            Belum Bayar
        </span>
        @endif
    </td>
</tr>