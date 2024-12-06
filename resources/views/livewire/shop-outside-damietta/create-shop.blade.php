<div>
    <x-page-content page-name="{{ __('site.create_shop_outside_damietta') }}">

        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-md">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="mt-3">
                    <x-label for="government_id" value="{{ __('site.governments') }}" />
                    <x-select class="mt-1 block w-full" wire:model="government_id" wire:change="cities">
                        <option value="">{{ __('site.select') }}</option>
                        @foreach ($this->governments() as $key => $val)
                            <option value="{{ $key }}">{{ $val }}</option>
                        @endforeach
                    </x-select>
                    <x-input-error for="government_id" class="mt-2" />
                </div>
                <div class="mt-3">
                    <x-label for="city_id" value="{{ __('site.cities') }}" />
                    <x-select class="mt-1 block w-full" wire:model="city_id">
                        <option value="">{{ __('site.select') }}</option>
                        @foreach ($this->cities() as $key => $val)
                            <option value="{{ $key }}">{{ $val }}</option>
                        @endforeach
                    </x-select>
                    <x-input-error for="city_id" class="mt-2" />
                </div>
                <div class="mt-3">
                    <x-label for="auction_date" value="{{ __('site.auction_date') }}" />
                    <x-input type="date" class="mt-1 block w-full" wire:model="auction_date" />
                    <x-input-error for="auction_date" class="mt-2" />
                </div>
            </div>
        </div>
    </x-page-content>
</div>
