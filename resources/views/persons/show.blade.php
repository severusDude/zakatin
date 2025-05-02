<x-layouts.app>
    <header class="w-full flex justify-between items-center my-4">
        <h1 class="text-3xl font-bold">{{ $person->name }}</h1>
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
        <div>
            <h2 class="text-lg font-medium text-gray-700">Description</h2>
            <p class="text-black">{{ $person->description }}</p>
        </div>

        <div>
            <h2 class="text-lg font-medium text-gray-700">Category</h2>
            <p class="text-black">{{ $person->category->label }}</p>
        </div>

        <div>
            <h2 class="text-lg font-medium text-gray-700">Family Head</h2>
            <p class="text-black">{{ $person->familyHead->name ?? 'No Family Head' }}</p>
        </div>

        @if ($person->familyMembers->isNotEmpty())
        <div>
            <h2 class="text-lg font-medium text-gray-700">Family Members</h2>
            <ul class="list-disc list-inside text-black">
                @foreach ($person->familyMembers as $member)
                <li>{{ $member->name }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </section>
</x-layouts.app>