<div>
    <x-page-content page-name="{{ __('site.departments') }}">

        @can('create-department')
            <livewire:department.create-department />
        @endcan
        @can('edit-department')
            <livewire:department.update-department />
        @endcan
        @can('delete-department')
            <livewire:department.delete-department />
        @endcan
        @can('bulk-delete-department')
            <livewire:department.bulk-delete-department />
        @endcan

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">

            <div class="flex justify-between">
                <h1 class=" text-2xl font-medium text-gray-900">
                    {{ __('site.departments') }}
                </h1>
            </div>

            <div class="mt-6 text-gray-500 leading-relaxed">
                <div class="mt-3">
                    <div class="md:flex justify-between">
                        <div class="mb-2">
                            <x-input type="search" wire:model.live.debounce.500ms="search"
                                placeholder="{{ __('site.search') }}..." />
                        </div>
                        <div class="mb-2">
                            <x-create-button permission="create-department" />
                        </div>
                    </div>
                    @can('bulk-delete-department')
                        <x-bulk-delete-button />
                    @endcan
                </div>

                <x-table>
                    <x-slot name="thead">
                        <tr>
                            @can('bulk-delete-department')
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
                                @can('bulk-delete-department')
                                    <td class="p-2 border">
                                        <x-checkbox wire:model.live="checkbox_arr" value="{{ $department->id }}" />
                                    </td>
                                @endcan
                                <td class="p-2 border">
                                    {{ $department->id }}
                                </td>
                                <td class="p-2 border">
                                    {{ $department->name }}
                                </td>
                                <td class="p-2 border">
                                    <div class="flex justify-center">
                                        <x-edit-button permission="edit-department" id="{{ $department->id }}" />
                                        <div class="mx-1"></div>
                                        <x-delete-button permission="delete-department" id="{{ $department->id }}"
                                            name="{{ $department->name }}" />
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
