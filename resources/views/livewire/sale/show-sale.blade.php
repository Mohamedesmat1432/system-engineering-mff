<div>
    @if ($this->show_modal)
    <x-dialog-modal wire:model="show_modal">
        <x-slot name="title">
            <div class="flex justify-between row-invoice">
                <div>{{ __('site.show_sale') }}</div>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="w-full mt-3">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 p-8">
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <tbody>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.customer_name') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->customer->customer_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.national_number') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->customer->national_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.phone_number') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->customer->phone_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.shop_code') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->shop_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.auction_date') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->auction_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.company_id') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->company?->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.government_id') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->government->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.city_id') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->city->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.center') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->center }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.location') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->location }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.building_number') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->building_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.building_entrance_number') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->building_entrance_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.shop_number') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->shop_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.type_of_shop') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->type_of_shop }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.shop_area') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->shop_area }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.sell_price') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->sell_price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.sell_price_for_meter') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->shop->sell_price_for_meter }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.payment_method') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ __("site.{$this->sale->payment_method}") }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.installment_count') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->installment_count }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.description') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->description }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <thead class="font-bold">
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            #
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.amount') }}
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.date') }}
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.status') }}
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.insurance') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->insurance->amount }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->insurance->date }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        @if ($this->sale->insurance->status)
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            {{ __('site.paid') }}
                                        </div>
                                        @else
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            {{ __('site.unpaid') }}
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.remaining_amount_sale') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->remainingSale->amount }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->remainingSale->date }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        @if ($this->sale->remainingSale->status)
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            {{ __('site.paid') }}
                                        </div>
                                        @else
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            {{ __('site.unpaid') }}
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.maintenance_deposit') }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->maintenanceDeposit->amount }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        {{ $this->sale->maintenanceDeposit->date }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        @if ($this->sale->maintenanceDeposit->status)
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            {{ __('site.paid') }}
                                        </div>
                                        @else
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            {{ __('site.unpaid') }}
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    @if ($this->sale->installments()->count() > 0)
                    <div class="relative z-0 w-full group invoice-two">
                        <table class="w-full text-center mb-3 bg-white">
                            <thead class="font-bold">
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{__('site.installment')}}
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.amount') }}
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.date') }}
                                        </div>
                                    </th>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __('site.status') }}
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->sale->installments as $installment)
                                @php $count = $loop->index + 1; @endphp
                                <tr>
                                    <th class="px-4 py-2 bsale border">
                                        <div class="flex justify-center">
                                            {{ __("site.installment_{$count}") }}
                                        </div>
                                    </th>
                                    <td class="p-2 bsale border">
                                        {{ $installment->amount }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        {{ $installment->date }}
                                    </td>
                                    <td class="p-2 bsale border">
                                        @if ($installment->status)
                                        <div class="p-2 bg-green-500 rounded-full text-white">
                                            {{ __('site.paid') }}
                                        </div>
                                        @else
                                        <div class="p-2 bg-yellow-200 rounded-full">
                                            {{ __('site.unpaid') }}
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    @endif
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            {{-- <x-indigo-button
                onclick="printsaleKids('{{ $this->sale->id }}','{{ LaravelLocalization::getCurrentLocale() }}')"
                wire:click="$set('show_modal',false)">
                <x-icon name="printer" class="h-4 w-4" />
                {{ __('site.print') }}
            </x-indigo-button> --}}
            <x-secondary-button class="mx-2" wire:click="$set('show_modal',false)" wire:loading.attr="disabled">
                {{ __('site.cancel') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
    @endif

</div>