<div>
    <x-page-content page-name="{{ __('site.sales') }}">

        @can('create-sale')
        <livewire:sale.create-sale />
        @endcan
        @can('show-sale')
        <livewire:sale.show-sale />
        @endcan
        @can('edit-sale')
        <livewire:sale.update-sale />
        @endcan
        @can('delete-sale')
        <livewire:sale.delete-sale />
        @endcan
        @can('bulk-delete-sale')
        <livewire:sale.bulk-delete-sale />
        @endcan
        @can('import-sale')
        <livewire:sale.import-sale />
        @endcan
        @can('export-sale')
        <livewire:sale.export-sale />
        @endcan

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900 underline">
                    {{ __('site.sales') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2 grid grid-cols-1 md:grid-cols-3  gap-4">
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                        </div>
                        <div class="mb-2 grid grid-cols-3 md:grid-cols-3 gap-4">
                            <x-create-button permission="create-sale" />
                            <x-import-button permission="import-sale" />
                            <x-export-button permission="export-sale" />
                        </div>
                    </div>
                </div>
                @can('bulk-delete-sale')
                <x-bulk-delete-button />
                @endcan
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-sale')
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
                                    <button wire:click="sortByField('customer_id')">
                                        {{ __('site.customer_name') }}
                                    </button>
                                    <x-sort-icon sort_field="customer_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('customer_id')">
                                        {{ __('site.national_number') }}
                                    </button>
                                    <x-sort-icon sort_field="customer_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('customer_id')">
                                        {{ __('site.phone_number') }}
                                    </button>
                                    <x-sort-icon sort_field="customer_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.shop_code') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.auction_date') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.company_id') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.government_id') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.city_id') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('shop_id')">
                                        {{ __('site.shop_number') }}
                                    </button>
                                    <x-sort-icon sort_field="shop_id" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                            <td class="px-2 border" colspan="3">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('insurances.sale_id')">
                                        {{ __('site.insurance') }}
                                    </button>
                                    <x-sort-icon sort_field="insurances.sale_id" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                    <span>{{ __('site.status') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="3">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('remaining_sales.sale_id')">
                                        {{ __('site.remaining_amount_sale') }}
                                    </button>
                                    <x-sort-icon sort_field="remaining_sales.sale_id" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                    <span>{{ __('site.status') }}</span>
                                </div>
                            </td>
                            <td class="px-2 py-2 border" colspan="3">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('maintenance_deposits.sale_id')">
                                        {{ __('site.maintenance_deposit') }}
                                    </button>
                                    <x-sort-icon sort_field="maintenance_deposits.sale_id" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                    <span>{{ __('site.status') }}</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 border">
                                <div class="flex justify-center">
                                    {{ __('site.action') }}
                                </div>
                            </td>
                            {{-- @for ($i = 1; $i <= 15; $i++) <td class="px-2 py-2 border" colspan="3">
                                <div class="flex justify-center">
                                    <button wire:click="sortByField('installments.sale_id')">
                                        {{ __("site.installment_{$i}") }}
                                    </button>
                                    <x-sort-icon sort_field="installments.sale_id" :sort_by="$sort_by"
                                        :sort_asc="$sort_asc" />
                                </div>
                                <div class="flex justify-between">
                                    <span>{{ __('site.amount') }}</span>
                                    <span>{{ __('site.date') }}</span>
                                    <span>{{ __('site.status') }}</span>
                                </div>
                                </td>
                                @endfor --}}
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @forelse ($sales as $sale)
                        <tr wire:key="shop-{{ $sale->id }}" class="odd:bg-gray-100">
                            @can('bulk-delete-sale')
                            <td class="p-2 border">
                                <x-checkbox wire:model.live="checkbox_arr" value="{{ $sale->id }}" />
                            </td>
                            @endcan
                            <td class="p-2 border">
                                {{ $sale->id }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->customer->customer_name }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->customer->national_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->customer->phone_number }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->shop_code }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->auction_date }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->company?->name }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->government->name }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->city->name }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->shop->building_number }}
                            </td>
                            <td class="p-2 border">
                                {{ __("site.{$sale->payment_method}") }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->insurance->amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->insurance->date }}
                            </td>
                            <td class="p-2 border">
                                @if ($sale->insurance->status)
                                <div class="p-2 bg-green-500 rounded-full text-white">
                                    {{ __('site.paid') }}
                                </div>
                                @else
                                <div class="p-2 bg-yellow-200 rounded-full">
                                    {{ __('site.unpaid') }}
                                </div>
                                @endif
                            </td>
                            <td class="p-2 border">
                                {{ $sale->remainingSale->amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->remainingSale->date }}
                            </td>
                            <td class="p-2 border">
                                @if ($sale->remainingSale->status)
                                <div class="p-2 bg-green-500 rounded-full text-white">
                                    {{ __('site.paid') }}
                                </div>
                                @else
                                <div class="p-2 bg-yellow-200 rounded-full">
                                    {{ __('site.unpaid') }}
                                </div>
                                @endif
                            </td>
                            <td class="p-2 border">
                                {{ $sale->maintenanceDeposit->amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $sale->maintenanceDeposit->date }}
                            </td>
                            <td class="p-2 border">
                                @if ($sale->maintenanceDeposit->status)
                                <div class="p-2 bg-green-500 rounded-full text-white">
                                    {{ __('site.paid') }}
                                </div>
                                @else
                                <div class="p-2 bg-yellow-200 rounded-full">
                                    {{ __('site.unpaid') }}
                                </div>
                                @endif
                            </td>
                            <td class="p-2 border">
                                <div class="flex justify-center">
                                    <x-show-button permission="show-sale" id="{{ $sale->id }}" />
                                    <div class="mx-1"></div>
                                    <x-edit-button permission="edit-sale" id="{{ $sale->id }}" />
                                    <div class="mx-1"></div>
                                    <x-delete-button permission="delete-sale" id="{{ $sale->id }}"
                                        name="{{ $sale->shop->auction_date }}" />
                                </div>
                            </td>
                            {{-- @foreach ($sale->installments as $installment)
                            <td class="p-2 border">
                                {{ $installment->amount }}
                            </td>
                            <td class="p-2 border">
                                {{ $installment->date }}
                            </td>
                            <td class="p-2 border">
                                @if ($installment->status)
                                <div class="p-2 bg-green-500 rounded-full text-white">
                                    {{ __('site.paid') }}
                                </div>
                                @else
                                <div class="p-2 bg-yellow-200 rounded-full">
                                    {{ __('site.unpaid') }}
                                </div>
                                @endif
                            </td>
                            @endforeach --}}
                        </tr>
                        @empty
                        <tr>
                            <td colspan="50" class="p-2 border text-center">
                                {{ __('site.no_data_found') }}
                            </td>
                        </tr>
                        @endforelse
                    </x-slot>
                </x-table>

                @if ($sales->hasPages())
                <x-paginate :data-links="$sales->links()" />
                @endif
            </div>
        </div>
    </x-page-content>
</div>