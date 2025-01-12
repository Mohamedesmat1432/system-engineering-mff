<div>
    @if ($this->edit_modal)
    <x-dialog-modal wire:model="edit_modal" submit="save()" method="PATCH">
        <x-slot name="title">
            {{ __('site.update_sale') }}
        </x-slot>

        <x-slot name="content">
            <div class="basic_data">
                <h3 class="mt-2 text-xl underline">{{ __('site.basic_data') }}</h3>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <div class="mt-2">
                        <x-label for="customer_id" value="{{ __('site.customer_id') }}" />
                        <x-select class="mt-1 block w-full" wire:model="customer_id">
                            <option value="">{{ __('site.select') }}</option>
                            @foreach ($this->customers() as $customer)
                            <option value="{{ $customer->id }}">
                                {{ $customer->customer_name }} /
                                {{ $customer->national_number }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="customer_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="shop_id" value="{{ __('site.shop_id') }}" />
                        <x-select class="mt-1 block w-full" wire:model="shop_id" wire:change.live="shopSellPrice">
                            <option value=""> {{ __('site.select') }}</option>
                            @foreach ($this->shops() as  $shop)
                            <option value="{{ $shop->id }}">
                                {{ $shop->government->name }} /
                                {{ $shop->city->name }} /
                                {{ $shop->building_number }} /
                                {{ $shop->shop_number }} /
                                {{ $shop->shop_area }} /
                                {{ $shop->sell_price }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="shop_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="auction_date" value="{{ __('site.auction_date') }}" />
                        <x-input type="date" class="mt-1 block w-full" wire:model="auction_date"
                            placeholder="{{ __('site.auction_date') }}" wire:change="changeDateByAuctionDate" />
                        <x-input-error for="auction_date" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="payment_method" value="{{ __('site.payment_method') }}" />
                        <x-select class="mt-1 block w-full" wire:model.live="payment_method">
                            <option value="">{{ __('site.select') }}</option>
                            @foreach ($this->payments() as $payment)
                            <option value="{{ $payment }}">
                                {{ __("site.{$payment}") }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="payment_method" class="mt-2" />
                    </div>
                    {{-- <div class="mt-2">
                        <x-label for="payment_method" value="{{ __('site.payment_method') }}" />
                        <x-input type="text" class="mt-1 block w-full" wire:model="payment_method"
                            placeholder="{{ __('site.payment_method') }}" />
                        <x-input-error for="payment_method" class="mt-2" />
                    </div> --}}
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="insurance">
                    <h3 class="mt-2 text-xl underline">{{ __('site.insurance') }}</h3>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                        <div class="mt-2">
                            <x-label for="insurance_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="insurance_amount"
                                placeholder="{{ __('site.amount') }}" wire:change.live="changeInsuranceAmount" />
                            <x-input-error for="insurance_amount" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="insurance_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="insurance_date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="insurance_date" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="remaining_sale">
                    <h3 class="mt-2 text-xl underline">{{ __('site.remaining_amount_sale') }}</h3>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                        <div class="mt-2">
                            <x-label for="remaining_sale_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="remaining_sale_amount"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="remaining_sale_amount" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="remaining_sale_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="remaining_sale_date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="remaining_sale_date" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="maintenance_deposit">
                    <h3 class="mt-2 text-xl underline">{{ __('site.maintenance_deposit') }}</h3>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                        <div class="mt-2">
                            <x-label for="maintenance_deposit_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="maintenance_deposit_amount"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="maintenance_deposit_amount" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="maintenance_deposit_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="maintenance_deposit_date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="maintenance_deposit_date" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="afine">
                    <h3 class="mt-2 text-xl underline">{{ __('site.afine') }}</h3>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                        <div class="mt-2">
                            <x-label for="afine_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="afine_amount"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="afine_amount" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="afine_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="afine_date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="afine_date" class="mt-2" />
                        </div>
                    </div>
                </div>
                @if ($payment_method == 'installment')
                @for ($i = 1; $i<=15 ; $i++)
                <div class="installments">
                    <h3 class="mt-2 text-xl underline">{{ __("site.installment_{$i}") }}</h3>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                        <div class="mt-2">
                            <x-label for="installment_amount_{{ $i }}" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="installment_amount_{{ $i }}"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="installment_amount_{{ $i }}" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="installment_date_{{ $i }}" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="installment_date_{{ $i }}"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="installment_date_{{ $i }}" class="mt-2" />
                        </div>
                    </div>
                </div>
                @endfor
                @endif
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