<div>
    @if ($this->edit_modal)
        <x-dialog-modal wire:model="edit_modal" submit="save()" method="PATCH" maxWidth="3xl">
            <x-slot name="title">
                {{ __('site.update_shop_outside_damietta') }}
            </x-slot>

            <x-slot name="content">
                <h3 class="mt-2 text-xl">{{ __('site.customer_data') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="mt-2">
                        <x-label for="buyer_name" value="{{ __('site.buyer_name') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="buyer_name"
                            placeholder="{{ __('site.buyer_name') }}" />
                        <x-input-error for="buyer_name" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <div class="flex">
                            <x-label for="national_number" value="{{ __('site.national_number') }}" />
                            <span class="text-red-600 mx-2">{{ $this->count_of_national_number }}</span>
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
                <h3 class="mt-2 text-xl">{{ __('site.location') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                        <x-select class="mt-1 block w-full" wire:model="city_id">
                            <option value="">{{ __('site.select') }}</option>
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
                    <div class="mt-2">
                        <x-label for="location" value="{{ __('site.location') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="location"
                            placeholder="{{ __('site.location') }}" />
                        <x-input-error for="location" class="mt-2" />
                    </div>
                </div>
                <h3 class="mt-2 text-xl">{{ __('site.shop_data') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="mt-2">
                        <x-label for="auction_date" value="{{ __('site.auction_date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="auction_date" />
                        <x-input-error for="auction_date" class="mt-2" />
                    </div>
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
                        <x-input type="number" class="mt-1 block w-full" wire:model="shop_area"
                            placeholder="{{ __('site.shop_area') }}" />
                        <x-input-error for="shop_area" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="sell_price" value="{{ __('site.sell_price') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="sell_price"
                            placeholder="{{ __('site.sell_price') }}" />
                        <x-input-error for="sell_price" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="sell_price_for_meter" value="{{ __('site.sell_price_for_meter') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="sell_price_for_meter"
                            placeholder="{{ __('site.sell_price_for_meter') }}" />
                        <x-input-error for="sell_price_for_meter" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="payment_method" value="{{ __('site.payment_method') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="payment_method"
                            placeholder="{{ __('site.payment_method') }}" />
                        <x-input-error for="payment_method" class="mt-2" />
                    </div>
                </div>
                <h3 class="mt-2 text-xl">{{ __('site.insurance') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mt-2">
                        <x-label for="insurance.amount" value="{{ __('site.amount') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="insurance.amount"
                            placeholder="{{ __('site.amount') }}" />
                        <x-input-error for="insurance.amount" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="insurance.date" value="{{ __('site.date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="insurance.date"
                            placeholder="{{ __('site.date') }}" />
                        <x-input-error for="insurance.date" class="mt-2" />
                    </div>
                </div>
                <h3 class="mt-2 text-xl">{{ __('site.remaining_amount_sale') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mt-2">
                        <x-label for="remaining_sale.amount" value="{{ __('site.amount') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="remaining_sale.amount"
                            placeholder="{{ __('site.amount') }}" />
                        <x-input-error for="remaining_sale.amount" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="remaining_sale.date" value="{{ __('site.date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="remaining_sale.date"
                            placeholder="{{ __('site.date') }}" />
                        <x-input-error for="remaining_sale.date" class="mt-2" />
                    </div>
                </div>
                <h3 class="mt-2 text-xl">{{ __('site.maintenance_deposit') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mt-2">
                        <x-label for="maintenance_deposit.amount" value="{{ __('site.amount') }}" />
                        <x-input type="number" class="mt-1 block w-full" wire:model="maintenance_deposit.amount"
                            placeholder="{{ __('site.amount') }}" />
                        <x-input-error for="maintenance_deposit.amount" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="maintenance_deposit.date" value="{{ __('site.date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="maintenance_deposit.date"
                            placeholder="{{ __('site.date') }}" />
                        <x-input-error for="maintenance_deposit.date" class="mt-2" />
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-indigo-button type="submit" wire:loading.attr="disabled">
                    {{ __('site.save') }}
                </x-indigo-button>
                <x-secondary-button class="mx-2" wire:click="$set('edit_modal',false)"
                    wire:loading.attr="disabled">
                    {{ __('site.cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    @endif
</div>
