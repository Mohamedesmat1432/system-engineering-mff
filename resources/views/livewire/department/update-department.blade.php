<div>
    @if ($this->edit_modal)
        <x-dialog-modal wire:model="edit_modal" submit="save()" method="PATCH">
            <x-slot name="title">
                {{ __('site.update_department') }}
            </x-slot>

            <x-slot name="content">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name_ar" value="{{ __('site.name_ar') }}" />
                    <x-input type="text" class="mt-1 block w-full" wire:model="name_ar"
                        placeholder="{{ __('site.name_ar') }}" autocomplete="departmentname" />
                    <x-input-error for="name_ar" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-4 mt-2">
                    <x-label for="name_en" value="{{ __('site.name_en') }}" />
                    <x-input type="text" class="mt-1 block w-full" wire:model="name_en"
                        placeholder="{{ __('site.name_en') }}" autocomplete="departmentname" />
                    <x-input-error for="name_en" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-indigo-button type="submit" wire:loading.attr="disabled">
                    {{ __('site.save') }}
                </x-indigo-button>
                <x-secondary-button class="mx-2" wire:click="$set('edit_modal',false)" wire:loading.attr="disabled">
                    {{ __('site.cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    @endif
</div>
