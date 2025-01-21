<div>
    <x-page-content page-name="{{ __('site.customers') }}">

        @can('create-customer')
            <livewire:customer.create-customer />
        @endcan
        @can('edit-customer')
            <livewire:customer.update-customer />
        @endcan
        @can('delete-customer')
            <livewire:customer.delete-customer />
        @endcan
        @can('bulk-delete-customer')
            <livewire:customer.bulk-delete-customer />
        @endcan
        @can('import-customer')
            <livewire:customer.import-customer />
        @endcan
        @can('export-customer')
            <livewire:customer.export-customer />
        @endcan

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900">
                    {{ __('site.customers') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2">
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                        </div>
                        <div class="mb-2 grid grid-cols-3 md:grid-cols-3 gap-4">
                            <x-create-button permission="create-customer" />
                            <x-import-button permission="import-customer" />
                            <x-export-button permission="export-customer" />
                        </div>
                    </div>
                    @can('bulk-delete-customer')
                        <x-bulk-delete-button />
                    @endcan
                </div>

                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-customer')
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
                                    <button wire:click="sortByField('customer_name')">
                                        {{ __('site.customer_name') }}
                                    </button>
                                    <x-sort-icon sort_field="customer_name" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                                    <button wire:click="sortByField('count_national_number')">
                                        {{ __('site.count_national_number') }}
                                    </button>
                                    <x-sort-icon sort_field="count_national_number" :sort_by="$sort_by"
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
                                    <button wire:click="sortByField('home_number')">
                                        {{ __('site.home_number') }}
                                    </button>
                                    <x-sort-icon sort_field="home_number" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                        @forelse ($customers as $customer)
                            <tr wire:key="customer-{{ $customer->id }}" class="odd:bg-gray-100">
                                @can('bulk-delete-customer')
                                    <td class="p-2 border">
                                        <x-checkbox wire:model.live="checkbox_arr" value="{{ $customer->id }}" />
                                    </td>
                                @endcan
                                <td class="p-2 border">
                                    {{ $customer->id }}
                                </td>
                                <td class="p-2 border">
                                    {{ $customer->customer_name }}
                                </td>
                                <td class="p-2 border">
                                    {{ $customer->national_number }}
                                </td>
                                <td class="p-2 border">
                                    {{ $customer->count_national_number }}
                                </td>
                                <td class="p-2 border">
                                    {{ $customer->phone_number }}
                                </td>
                                <td class="p-2 border">
                                    {{ $customer->home_number }}
                                </td>
                                <td class="p-2 border">
                                    <div class="flex justify-center">
                                        <x-edit-button permission="edit-customer" id="{{ $customer->id }}" />
                                        <div class="mx-1"></div>
                                        <x-delete-button permission="delete-customer" id="{{ $customer->id }}"
                                            name="{{ $customer->customer_name }}" />
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

                @if ($customers->hasPages())
                    <x-paginate :data-links="$customers->links()" />
                @endif
            </div>
        </div>
    </x-page-content>
</div>
