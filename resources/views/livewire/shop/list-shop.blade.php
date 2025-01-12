<div>
    <x-page-content page-name="{{ __('site.list_shop') }}">

        @can('create-shop')
        <livewire:shop.create-shop />
        @endcan
        @can('edit-shop')
        <livewire:shop.update-shop />
        @endcan
        @can('delete-shop')
        <livewire:shop.delete-shop />
        @endcan
        @can('bulk-delete-shop')
        <livewire:shop.bulk-delete-shop />
        @endcan
        {{-- @can('import-shop')
        <livewire:shop.import-shop />
        @endcan
        @can('export-shop')
        <livewire:shop.export-shop />
        @endcan --}}

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900 underline">
                    {{ __('site.list_shop') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2 grid grid-cols-1 md:grid-cols-3  gap-4">
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                            <x-select wire:model.live.debounce.500ms="search_by_government" wire:change="cities">
                                <option value="">{{ __('site.search_by_government') }}</option>
                                @foreach ($this->governments() as $key => $val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </x-select>
                            <x-select wire:model.live.debounce.500ms="search_by_city">
                                <option value=""> {{ __('site.search_by_city') }}</option>
                                @foreach ($this->cities() as $key => $val)
                                <option value="{{ $key }}">{{ $val }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="mb-2 grid grid-cols-1 md:grid-cols-1 gap-4">
                            <x-create-button permission="create-shop" />
                            {{-- <x-import-button permission="import-shop" />
                            <x-export-button permission="export-shop" /> --}}
                        </div>
                    </div>
                </div>
                @can('bulk-delete-shop')
                <x-bulk-delete-button />
                @endcan
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-shop')
                            <td class="px-4 py-2 border">
                                <div class="text-center">
                                    <x-checkbox wire:click="checkboxAll" wire:model.live="checkbox_status" />
                                </div>
                            </td>
                            @endcan
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('id')">
                                        {{ __('site.id') }}
                                    </button>
                                    <x-sort-icon sort_field="id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('government_id')">
                                        {{ __('site.government_id') }}
                                    </button>
                                    <x-sort-icon sort_field="government_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('city_id')">
                                        {{ __('site.city_id') }}
                                    </button>
                                    <x-sort-icon sort_field="city_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('center')">
                                        {{ __('site.center') }}
                                    </button>
                                    <x-sort-icon sort_field="center" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('location')">
                                        {{ __('site.location') }}
                                    </button>
                                    <x-sort-icon sort_field="location" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('building_number')">
                                        {{ __('site.building_number') }}
                                    </button>
                                    <x-sort-icon sort_field="building_number" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('building_entrance_number')">
                                        {{ __('site.building_entrance_number') }}
                                    </button>
                                    <x-sort-icon sort_field="building_entrance_number" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_number')">
                                        {{ __('site.shop_number') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_number" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_area')">
                                        {{ __('site.shop_area') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_area" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('type_of_shop')">
                                        {{ __('site.type_of_shop') }}
                                    </button>
                                    <x-sort-icon sort_field="type_of_shop" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('sell_price')">
                                        {{ __('site.sell_price') }}
                                    </button>
                                    <x-sort-icon sort_field="sell_price" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('sell_price_for_meter')">
                                        {{ __('site.sell_price_for_meter') }}
                                    </button>
                                    <x-sort-icon sort_field="sell_price_for_meter" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    {{ __('site.action') }}
                                </div>
                            </td>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @forelse ($shops as $shop)
                        <tr wire:key="shop-{{ $shop->id }}" class="odd:bg-gray-100">
                            @can('bulk-delete-shop')
                            <td class="p-2 border">
                                <x-checkbox wire:model.live="checkbox_arr" value="{{ $shop->id }}" />
                            </td>
                            @endcan
                            <td class="p-2 border">
                                {{ $shop->id }}
                            </td>
                            <td class="p-2 border">
                                {{ app()->getLocale() === 'ar' ? $shop->government->name_ar : $shop->government->name_en
                                }}
                            </td>
                            <td class="p-2 border">
                                {{ app()->getLocale() === 'ar' ? $shop->city->name_ar : $shop->city->name_en }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->center }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->location }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->building_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->building_entrance_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->shop_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->shop_area }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->type_of_shop }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->sell_price }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->sell_price_for_meter }}
                            </td>
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <x-edit-button permission="edit-shop" id="{{ $shop->id }}" />
                                    <div class="mx-1"></div>
                                    <x-delete-button permission="delete-shop" id="{{ $shop->id }}"
                                        name="{{ $shop->location }}" />
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="42" class="p-2 border text-center">
                                {{ __('site.no_data_found') }}
                            </td>
                        </tr>
                        @endforelse
                    </x-slot>
                </x-table>

                @if ($shops->hasPages())
                <x-paginate :data-links="$shops->links()" />
                @endif
            </div>
        </div>
    </x-page-content>
</div>