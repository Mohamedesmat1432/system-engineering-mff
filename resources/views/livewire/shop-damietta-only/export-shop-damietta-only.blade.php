<div>
    @if ($this->export_modal)
        <x-dialog-modal wire:model.live="export_modal" submit="export()" method="POST">
            <x-slot name="title">
                {{ __('site.export_shop_damietta_only') }}
            </x-slot>

            <x-slot name="content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mt-3">
                        <x-label for="search" value="{{ __('site.search') }}" />
                        <x-input type="search" placeholder="{{ __('site.search') }}" class="mt-1 block w-full border p-1"
                            wire:model.live="search" />
                        <x-input-error for="search" class="mt-2" />
                    </div>
                    <div class="mt-3">
                        <x-label for="extension" value="{{ __('site.extension') }}" />
                        <x-select class="block w-full" wire:model.live="extension">
                            <option value="xlsx">xlsx</option>
                            <option value="csv">csv</option>
                            <option value="ods">ods</option>
                            <option value="ots">ots</option>
                            <option value="html">html</option>
                            <option value="pdf">pdf</option>
                        </x-select>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-indigo-button type="submit" wire:loading.attr="disabled">
                    {{ __('site.export') }}
                </x-indigo-button>

                <x-secondary-button class="mx-2" wire:click="$set('export_modal',false)" wire:loading.attr="disabled">
                    {{ __('site.cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    @endif
</div>
