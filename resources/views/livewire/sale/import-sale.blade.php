<div>
    @if ($this->import_modal)
    <x-dialog-modal wire:model.live="import_modal" submit="import()" method="POST">
        <x-slot name="title">
            {{ __('site.import_sale') }}
        </x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-4">
                <x-label for="file" value="{{ __('site.choose_file') }}" />
                <x-input type="file" class="mt-1 block w-full border p-1" wire:model="file" />
                <x-input-error for="file" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-indigo-button type="submit" wire:loading.attr="disabled">
                {{ __('site.import') }}
            </x-indigo-button>

            <x-secondary-button class="mx-2" wire:click="$set('import_modal',false)" wire:loading.attr="disabled">
                {{ __('site.cancel') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
    @endif
</div>