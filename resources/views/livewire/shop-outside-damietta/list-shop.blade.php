<div>
    <x-page-content page-name="{{ __('site.departments') }}">

        <livewire:shop-outside-damietta.delete-shop />

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900">
                    {{ __('site.departments') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="flex justify-between">
                        <div>
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                        </div>
                    </div>
                    @can('bulk-delete-shop-outside-damietta')
                        <div class="px-4 py-2 border mt-3">
                            <x-bulk-delete-button />
                            <livewire:shop-outside-damietta.bulk-delete-shop />
                        </div>
                    @endcan
                </div>

                <x-table>
                    <x-slot name="thead">
                        <tr>
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
                                    <button wire:click="sortByField('name')">
                                        {{ __('site.name') }}
                                    </button>
                                    <x-sort-icon sort_field="name" :sort_by="$sort_by" :sort_asc="$sort_asc" />
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
                        @forelse ($departments as $department)
                            <tr wire:key="department-{{ $department->id }}" class="odd:bg-gray-100">
                                <td class="p-2 border">
                                    {{ $department->id }}
                                </td>
                                <td class="p-2 border">
                                    {{ app()->getLocale() === 'ar' ? $department->name_ar : $department->name_en }}
                                </td>
                                <td class="p-2 border">
                                    <div class="flex justify-center">
                                        <x-edit-button permission="edit-department" id="{{ $department->id }}" />
                                        <div class="mx-1"></div>
                                        <x-delete-button permission="delete-department" id="{{ $department->id }}"
                                            name="{{ app()->getLocale() === 'ar' ? $department->name_ar : $department->name_en }}" />
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

                @if ($departments->hasPages())
                    <x-paginate :data-links="$departments->links()" />
                @endif
            </div>
        </div>
    </x-page-content>
</div>
