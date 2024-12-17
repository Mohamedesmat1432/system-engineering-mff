<div>
    <x-page-content page-name="{{ __('site.list_shop_damietta_only') }}">

        @can('create-shop-damietta-only')
        <livewire:shop-damietta-only.create-shop-damietta-only />
        @endcan
        @can('edit-shop-damietta-only')
        <livewire:shop-damietta-only.update-shop-damietta-only />
        @endcan
        @can('delete-shop-damietta-only')
        <livewire:shop-damietta-only.delete-shop-damietta-only />
        @endcan
        @can('bulk-delete-shop-damietta-only')
        <livewire:shop-damietta-only.bulk-delete-shop-damietta-only />
        @endcan
        @can('export-shop-damietta-only')
        <livewire:shop-damietta-only.export-shop-damietta-only />
        @endcan

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class="text-2xl font-medium text-gray-900">
                    {{ __('site.list_shop_damietta_only') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2">
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                        </div>
                        <div class="flex mb-2">
                            <x-create-button permission="create-shop-damietta-only" />
                            <div class="mx-1"></div>
                            <x-export-button permission="export-shop-damietta-only" />
                        </div>
                    </div>
                </div>
                @can('bulk-delete-shop-damietta-only')
                <x-bulk-delete-button />
                @endcan
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-shop-damietta-only')
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
                                    <button wire:click="sortByField('insurance')">
                                        {{ __('site.insurance') }}
                                    </button>
                                    <x-sort-icon sort_field="insurance" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('remaining_sale')">
                                        {{ __('site.remaining_amount_sale') }}
                                    </button>
                                    <x-sort-icon sort_field="remaining_sale" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('maintenance_deposit')">
                                        {{ __('site.maintenance_deposit') }}
                                    </button>
                                    <x-sort-icon sort_field="maintenance_deposit" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                            </td>
                            @for ($i = 0; $i <= 14; $i++) <td class="px-2 py-2 border" colspan="2">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('installments')">
                                        {{ __("site.installment_{$i}") }}
                                    </button>
                                    <x-sort-icon sort_field="installments" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                </div>
                                </td>
                                @endfor
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
                            @can('bulk-delete-shop-damietta-only')
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
                                {{ $shop->insurance['amount'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->insurance['date'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->remaining_sale['amount'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->remaining_sale['date'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->maintenance_deposit['amount'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $shop->maintenance_deposit['date'] }}
                            </td>
                            @foreach ($shop->installments as $key => $installment)
                            <td class="p-2 border">
                                {{ $installment['amount'] }}
                            </td>
                            <td class="p-2 border">
                                {{ $installment['date'] }}
                            </td>
                            @endforeach
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <x-edit-button permission="edit-shop-damietta-only" id="{{ $shop->id }}" />
                                    <div class="mx-1"></div>
                                    <x-delete-button permission="delete-shop-damietta-only" id="{{ $shop->id }}"
                                        name="{{ $shop->national_number }}" />
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="p-2 border text-center">
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