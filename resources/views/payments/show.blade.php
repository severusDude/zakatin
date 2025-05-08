<x-layouts.app>
    <header class="w-full flex justify-between items-center my-4">
        <a href="{{ route('payments.index') }}" class="flex gap-2 items-center">
            <x-heroicon-o-arrow-left width="24" height="24" />
            <h1 class="text-3xl font-bold">{{ $payment->person->name }}</h1>
        </a>
        <div class="flex gap-2">
            @if ($payment->status)
            <button class="bg-accent text-accent-foreground px-4 py-2 rounded-lg" disabled>Lunas</button>
            @else
            <a href="{{ route('payments.edit', $payment->id) }}"
                class="px-4 py-2 rounded-md outline outline-gray-200 transition hover:bg-gray-200/80 select-none">
                Isi
            </a>
            @endif
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
                    <tbody class="border-t border-black">
                        @php
                        $persons = collect([$payment->person])->concat($payment->person->familyMembers);
                        @endphp
                        @foreach ($persons as $person)
                        <x-payment-row :payment="$payment" :person="$person" :showCheckbox="false" :isChecked="false" />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layouts.app>