<div>
    @if ($this->create_modal)
    <x-dialog-modal wire:model="create_modal" submit="save()" method="POST">
        <x-slot name="title">
            {{ __('site.create_new_customer') }}
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mt-2">
                    <x-label for="customer_name" value="{{ __('site.customer_name') }}" />
                    <x-input type="text" class="mt-1 block w-full" wire:model="customer_name"
                        placeholder="{{ __('site.customer_name') }}" />
                    <x-input-error for="customer_name" class="mt-2" />
                </div>
                <div class="mt-2">
                    <div class="flex">
                        <x-label for="national_number" value="{{ __('site.national_number') }}" />
                        <span class="text-red-600 mx-2">{{ $this->count_national_number }}</span>
                    </div>
                    <x-input type="text" class="mt-1 block w-full" wire:model="national_number"
                        wire:keyup="countNationalId" placeholder="{{ __('site.national_number') }}" />
                    <x-input-error for="national_number" class="mt-2" />
                </div>
                <div class="mt-2">
                    <x-label for="phone_number" value="{{ __('site.phone_number') }}" />
                    <x-input type="text" class="mt-1 block w-full" wire:model="phone_number"
                        placeholder="{{ __('site.phone_number') }}" />
                    <x-input-error for="phone_number" class="mt-2" />
                </div>
                <div class="mt-2">
                    <x-label for="home_number" value="{{ __('site.home_number') }}" />
                    <x-input type="text" class="mt-1 block w-full" wire:model="home_number"
                        placeholder="{{ __('site.home_number') }}" />
                    <x-input-error for="home_number" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-indigo-button type="submit" wire:loading.attr="disabled">
                {{ __('site.save') }}
            </x-indigo-button>
            <x-secondary-button class="mx-2" wire:click="$set('create_modal',false)" wire:loading.attr="disabled">
                {{ __('site.cancel') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
    @endif
</div>