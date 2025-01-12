<div>
    <x-page-content page-name="{{ __('site.list_shop_outside_damietta') }}">

        @can('create-shop-outside-damietta')
        <livewire:shop-outside-damietta.create-shop-outside-damietta />
        @endcan
        @can('edit-shop-outside-damietta')
        <livewire:shop-outside-damietta.update-shop-outside-damietta />
        @endcan
        @can('delete-shop-outside-damietta')
        <livewire:shop-outside-damietta.delete-shop-outside-damietta />
        @endcan
        @can('bulk-delete-shop-outside-damietta')
        <livewire:shop-outside-damietta.bulk-delete-shop-outside-damietta />
        @endcan
        @can('import-shop-outside-damietta')
        <livewire:shop-outside-damietta.import-shop-outside-damietta />
        @endcan
        @can('export-shop-outside-damietta')
        <livewire:shop-outside-damietta.export-shop-outside-damietta />
        @endcan

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900 underline">
                    {{ __('site.list_shop_outside_damietta') }}
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
                        <div class="mb-2 grid grid-cols-3 md:grid-cols-3 gap-4">
                            <x-create-button permission="create-shop-outside-damietta" />
                            <x-import-button permission="import-shop-outside-damietta" />
                            <x-export-button permission="export-shop-outside-damietta" />
                        </div>
                    </div>
                </div>
                @can('bulk-delete-shop-outside-damietta')
                <x-bulk-delete-button />
                @endcan
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-shop-outside-damietta')
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
                                    <button wire:click="sortByField('auction_date')">
                                        {{ __('site.auction_date') }}
                                    </button>
                                    <x-sort-icon sort_field="auction_date" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                                    <button wire:click="sortByField('buyer_name')">
                                        {{ __('site.buyer_name') }}
                                    </button>
                                    <x-sort-icon sort_field="buyer_name" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('national_number')">
                                        {{ __('site.national_number') }}
                                    </button>
                                    <x-sort-icon sort_field="national_number" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('count_of_national_number')">
                                        {{ __('site.count_of_national_number') }}
                                    </button>
                                    <x-sort-icon sort_field="count_of_national_number" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('phone_number')">
                                        {{ __('site.phone_number') }}
                                    </button>
                                    <x-sort-icon sort_field="phone_number" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                                    <button wire:click="sortByField('payment_method')">
                                        {{ __('site.payment_method') }}
                                    </button>
                                    <x-sort-icon sort_field="payment_method" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('insurance_date')">
                                        {{ __('site.insurance') }}
                                    </button>
                                    <x-sort-icon sort_field="insurance_date" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('remaining_sale_date')">
                                        {{ __('site.remaining_amount_sale') }}
                                    </button>
                                    <x-sort-icon sort_field="remaining_sale_date" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('maintenance_deposit_date')">
                                        {{ __('site.maintenance_deposit') }}
                                    </button>
                                    <x-sort-icon sort_field="maintenance_deposit_date" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('afine_date')">
                                        {{ __('site.afine') }}
                                    </button>
                                    <x-sort-icon sort_field="afine_date" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
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
                            @can('bulk-delete-shop-outside-damietta')
                            <td class="p-2 border">
                                <x-checkbox wire:model.live="checkbox_arr" value="{{ $shop->id }}" />
                            </td>
                            @endcan
                            <td class="p-2 border">
                                {{ $shop->id }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->government->name }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->city->name }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->auction_date }}
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
                                {{ $shop->buyer_name }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->national_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->count_of_national_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->phone_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->sell_price }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->sell_price_for_meter }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->payment_method }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->insurance_amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->insurance_date }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->remaining_sale_amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->remaining_sale_date }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->maintenance_deposit_amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->maintenance_deposit_date }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->afine_amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->afine_date }}
                            </td>
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <x-edit-button permission="edit-shop-outside-damietta" id="{{ $shop->id }}" />
                                    <div class="mx-1"></div>
                                    <x-delete-button permission="delete-shop-outside-damietta" id="{{ $shop->id }}"
                                        name="{{ $shop->national_number }}" />
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