<div>
    @if ($this->create_modal)
    <x-dialog-modal wire:model="create_modal" submit="save()" method="POST">
        <x-slot name="title">
            {{ __('site.create_shop') }}
        </x-slot>

        <x-slot name="content">
            <div class="location">
                <h3 class="mt-2 text-xl underline">{{ __('site.location') }}</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-x-4">
                    <div class="mt-2">
                        <x-label for="shop_code" value="{{ __('site.shop_code') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="shop_code"
                            placeholder="{{ __('site.shop_code') }}" />
                        <x-input-error for="shop_code" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="auction_date" value="{{ __('site.auction_date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="auction_date"
                            placeholder="{{ __('site.auction_date') }}" />
                        <x-input-error for="auction_date" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="company_id" value="{{ __('site.company_id') }}" />
                        <x-select class="mt-1 block w-full" wire:model="company_id">
                            <option value="">{{ __('site.select') }}</option>
                            @foreach ($this->companies() as $key => $val)
                            <option value="{{ $key }}">{{ $val }}</option>
                            @endforeach
                        </x-select>
                        <x-input-error for="company_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="government_id" value="{{ __('site.government_id') }}" />
                        <x-select class="mt-1 block w-full" wire:model="government_id" wire:change="cities">
                            <option value="">{{ __('site.select') }}</option>
                            @foreach ($this->governments() as $key => $val)
                            <option value="{{ $key }}">{{ $val }}</option>
                            @endforeach
                        </x-select>
                        <x-input-error for="government_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="city_id" value="{{ __('site.city_id') }}" />
                        <div class="w-4 h-4 border-2 border-black border-t-transparent rounded-full animate-spin"
                            wire:loading wire:target="cities">
                        </div>
                        <x-select class="mt-1 block w-full" wire:model="city_id">
                            <option value=""> {{ __('site.select') }}</option>
                            @foreach ($this->cities() as $key => $val)
                            <option value="{{ $key }}">{{ $val }}</option>
                            @endforeach
                        </x-select>
                        <x-input-error for="city_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="center" value="{{ __('site.center') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="center"
                            placeholder="{{ __('site.center') }}" />
                        <x-input-error for="center" class="mt-2" />
                    </div>
                </div>
                <div class="mt-2">
                    <x-label for="location" value="{{ __('site.location') }}" />
                    <x-textarea type="text" class="mt-1 block w-full" wire:model="location"
                        placeholder="{{ __('site.location') }}">
                    </x-textarea>
                    <x-input-error for="location" class="mt-2" />
                </div>
            </div>
            <div class="data_shop">
                <h3 class="mt-2 text-xl underline">{{ __('site.shop_data') }}</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-x-4">
                    <div class="mt-2">
                        <x-label for="building_number" value="{{ __('site.building_number') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="building_number"
                            placeholder="{{ __('site.building_number') }}" />
                        <x-input-error for="building_number" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="building_entrance_number" value="{{ __('site.building_entrance_number') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="building_entrance_number"
                            placeholder="{{ __('site.building_entrance_number') }}" />
                        <x-input-error for="building_entrance_number" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="shop_number" value="{{ __('site.shop_number') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="shop_number"
                            placeholder="{{ __('site.shop_number') }}" />
                        <x-input-error for="shop_number" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="type_of_shop" value="{{ __('site.type_of_shop') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="type_of_shop"
                            placeholder="{{ __('site.type_of_shop') }}" />
                        <x-input-error for="type_of_shop" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="shop_area" value="{{ __('site.shop_area') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="shop_area" wire:change="sellPriceForMeter"
                            placeholder="{{ __('site.shop_area') }}" />
                        <x-input-error for="shop_area" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="sell_price" value="{{ __('site.sell_price') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="sell_price" wire:change="sellPriceForMeter"
                            placeholder="{{ __('site.sell_price') }}" />
                        <x-input-error for="sell_price" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="sell_price_for_meter" value="{{ __('site.sell_price_for_meter') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="sell_price_for_meter"
                            placeholder="{{ __('site.sell_price_for_meter') }}" />
                        <x-input-error for="sell_price_for_meter" class="mt-2" />
                    </div>
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