<div>
    @if ($this->edit_modal)
    <x-dialog-modal wire:model="edit_modal" submit="save()" method="PATCH">
        <x-slot name="title">
            {{ __('site.update_sale') }}
        </x-slot>

        <x-slot name="content">
            <div class="basic_data">
                <h3 class="mt-2 text-xl">{{ __('site.basic_data') }}</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4">
                    <div class="mt-2">
                        <x-label for="customer_id" value="{{ __('site.customer_id') }}" />
                        <x-input type="search" class="mt-1 block w-full" wire:model.live="customer_search"
                            placeholder="{{ __('site.customer_search') }}" />
                        <x-select class="mt-1 block w-full" wire:model="customer_id">
                            <option value="">{{ __('site.select_customer') }}</option>
                            @foreach ($this->customers() as $customer)
                            <option value="{{ $customer->id }}">
                                {{ $customer->customer_name }} /
                                {{ $customer->national_number }} /
                                {{ $customer->phone_number }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="customer_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="shop_id" value="{{ __('site.shop_id') }}" />
                        <x-input type="search" class="mt-1 block w-full" wire:model.live="shop_search"
                            placeholder="{{ __('site.shop_search') }}" />
                        <x-select class="mt-1 block w-full" wire:model="shop_id" wire:change.live="shopSellPrice">
                            <option value=""> {{ __('site.select_shop') }}</option>
                            @foreach ($this->shops() as $shop)
                            <option value="{{ $shop->id }}">
                                {{ $shop->government->name }} /
                                {{ $shop->city->name }} /
                                {{ $shop->building_number }} /
                                {{ $shop->building_entrance_number }} /
                                {{ $shop->shop_number }} /
                                {{ $shop->type_of_shop }} /
                                {{ $shop->shop_area }} /
                                {{ $shop->sell_price }} /
                                {{ $shop->sell_price_for_meter }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="shop_id" class="mt-2" />
                    </div>
                    <div class="mt-2">
                        <x-label for="payment_method" value="{{ __('site.payment_method') }}" />
                        <x-select class="mt-1 block w-full" wire:model="payment_method" wire:change.live="changePayment">
                            <option value="">{{ __('site.select') }}</option>
                            @foreach ($this->payments() as $payment)
                            <option value="{{ $payment }}">
                                {{ __("site.{$payment}") }}
                            </option>
                            @endforeach
                        </x-select>
                        <x-input-error for="payment_method" class="mt-2" />
                    </div>
                    @if($this->payment_method === 'installment')
                    <div class="mt-2">
                        <x-label for="installment_count" value="{{ __('site.installment_count') }}" />
                        <x-input type="number" max="15" class="mt-1 block w-full" wire:model="installment_count"
                            wire:change.live="changeInstallmentCount" placeholder="{{ __('site.installment_count') }}" />
                        <x-input-error for="installment_count" class="mt-2" />
                    </div>
                    @endif
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-x-4">
                <div class="insurance">
                    <div class="grid md:grid-cols-5 gap-x-4">
                        <h3 class="mt-8 text-xl md:col-span-1">{{ __('site.insurance') }}</h3>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="insurance_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="insurance.amount"
                                placeholder="{{ __('site.amount') }}" wire:change.live="changeInsuranceAmount" />
                            <x-input-error for="insurance.amount" class="mt-2" />
                        </div>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="insurance_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="insurance.date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="insurance.date" class="mt-2" />
                        </div>
                    </div>
                </div>
                <div class="remaining_sale">
                    <div class="grid md:grid-cols-5 gap-x-4">
                        <h3 class="mt-8 text-xl md:col-span-1">{{ __('site.remaining_amount_sale') }}</h3>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="remaining_sale_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="remaining_sale.amount"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="remaining_sale.amount" class="mt-2" />
                        </div>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="remaining_sale_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="remaining_sale.date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="remaining_sale.date" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-x-4">
                <div class="maintenance_deposit">
                    <div class="grid md:grid-cols-5 gap-x-4">
                        <h3 class="mt-8 text-xl md:col-span-1">{{ __('site.maintenance_deposit') }}</h3>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="maintenance_deposit_amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full" wire:model="maintenance_deposit.amount"
                                placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="maintenance_deposit.amount" class="mt-2" />
                        </div>
                        <div class="mt-2 md:col-span-2">
                            <x-label for="maintenance_deposit_date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="maintenance_deposit.date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="maintenance_deposit.date" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-x-4">
                <div class="description">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-x-4">
                        <h3 class="mt-8 text-xl md:col-span-1">{{ __('site.technical_description') }}</h3>
                        <div class="mt-2 md:col-span-4">
                            <x-label for="description" value="{{ __('site.description') }}" />
                            <x-textarea type="number" class="mt-1 block w-full" wire:model="description"
                                placeholder="{{ __('site.description') }}">
                            </x-textarea>
                            <x-input-error for="description" class="mt-2" />
                        </div>
                    </div>
                </div>
            </div>
            @if ($payment_method == 'installment')
                @foreach ($installments as $key => $installment) 
                @php $num = $key + 1; @endphp
                <div class="installments">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-x-4">
                        <h3 class="mt-8 text-xl">{{ __("site.installment_{$num}") }}</h3>
                        <div class="mt-2">
                            <x-label for="installments.{{$key}}.amount" value="{{ __('site.amount') }}" />
                            <x-input type="number" class="mt-1 block w-full"
                                wire:model="installments.{{$key}}.amount" placeholder="{{ __('site.amount') }}" />
                            <x-input-error for="installments.{{$key}}.amount" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="installments.{{$key}}.date" value="{{ __('site.date') }}" />
                            <x-input type="date" class="mt-1 block w-full" wire:model="installments.{{$key}}.date"
                                placeholder="{{ __('site.date') }}" />
                            <x-input-error for="installments.{{$key}}.date" class="mt-2" />
                        </div>
                        <div class="mt-2">
                            <x-label for="installments.{{$key}}.status" value="{{ __('site.status') }}" />
                            <x-select class="mt-1 block w-full" wire:model="installments.{{$key}}.status">
                                <option value="">{{ __('site.select') }}</option>
                                <option value="0">{{ __("site.unpaid") }}</option>
                                <option value="1">{{ __("site.paid") }}</option>
                            </x-select>
                            <x-input-error for="installments.{{$key}}.status" class="mt-2" />
                        </div>
                        <div class="mt-8">
                            @if ($loop->index !== 0)
                                <x-danger-button wire:click="removeInstallment({{ $key }})"
                                    wire:loading.attr="disabled">
                                    {{-- {{ __('site.remove') }} --}}
                                    <x-icon class="w-4 h-4" name="trash" />
                                </x-danger-button>
                            @else
                                <x-indigo-button wire:click="addInstallment" wire:loading.attr="disabled">
                                    {{-- {{ __('site.add_more') }} --}}
                                    <x-icon class="w-4 h-4" name="plus" />
                                </x-indigo-button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
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