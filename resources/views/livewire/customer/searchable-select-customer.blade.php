<div>
    <div>
        <input
            type="text"
            wire:model.debounce.300ms.live="query"
            placeholder="Search..."
            class="border px-3 py-2 w-full"
        />
    </div>

    @if (!empty($query))
        <ul class="border mt-2 bg-white">
            @forelse ($items as $item)
                <li
                    wire:click="selectItem({{ $item['id'] }})"
                    class="cursor-pointer hover:bg-gray-200 px-3 py-2"
                >
                    {{ $item['customer_name'] }}
                </li>
            @empty
                <li class="px-3 py-2">No results found.</li>
            @endforelse
        </ul>
    @endif

    @if ($selectedItem)
        <p class="mt-3">Selected Item ID: {{ $selectedItem }}</p>
    @endif
</div>
