<?php

namespace App\Traits;

use App\Helpers\Helper;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Shop;
use Livewire\WithPagination;

trait SaleTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?Sale $sale;

    public $sale_id, $customer_id, $shop_id, $auction_date, $payment_method,
        $insurance_amount, $insurance_date, $remaining_sale_amount, $remaining_sale_date,
        $maintenance_deposit_amount, $maintenance_deposit_date, $afine_amount, $afine_date,
        $installment_amount_1, $installment_date_1, $installment_amount_2, $installment_date_2,
        $installment_amount_3, $installment_date_3, $installment_amount_4, $installment_date_4,
        $installment_amount_5, $installment_date_5, $installment_amount_6, $installment_date_6,
        $installment_amount_7, $installment_date_7, $installment_amount_8, $installment_date_8,
        $installment_amount_9, $installment_date_9, $installment_amount_10, $installment_date_10,
        $installment_amount_11, $installment_date_11, $installment_amount_12, $installment_date_12,
        $installment_amount_13, $installment_date_13, $installment_amount_14, $installment_date_14,
        $installment_amount_15, $installment_date_15;

    protected function rules()
    {
        return [
            'customer_id' => 'required|numeric|exists:customers,id',
            'shop_id' => 'required|numeric|exists:shops,id',
            'auction_date' => 'required|date',
            'payment_method' => 'nullable|string',
            'insurance_amount' => 'nullable|numeric',
            'insurance_date' => 'nullable|date',
            'remaining_sale_amount' => 'nullable|numeric',
            'remaining_sale_date' => 'nullable|date',
            'maintenance_deposit_amount' => 'nullable|numeric',
            'maintenance_deposit_date' => 'nullable|date',
            'afine_amount' => 'nullable|numeric',
            'afine_date' => 'nullable|date',
            'installment_amount_1' => 'nullable|numeric',
            'installment_date_1' => 'nullable|date',
            'installment_amount_2' => 'nullable|numeric',
            'installment_date_2' => 'nullable|date',
            'installment_amount_3' => 'nullable|numeric',
            'installment_date_3' => 'nullable|date',
            'installment_amount_4' => 'nullable|numeric',
            'installment_date_4' => 'nullable|date',
            'installment_amount_5' => 'nullable|numeric',
            'installment_date_5' => 'nullable|date',
            'installment_amount_6' => 'nullable|numeric',
            'installment_date_6' => 'nullable|date',
            'installment_amount_7' => 'nullable|numeric',
            'installment_date_7' => 'nullable|date',
            'installment_amount_8' => 'nullable|numeric',
            'installment_date_8' => 'nullable|date',
            'installment_amount_9' => 'nullable|numeric',
            'installment_date_9' => 'nullable|date',
            'installment_amount_10' => 'nullable|numeric',
            'installment_date_10' => 'nullable|date',
            'installment_amount_11' => 'nullable|numeric',
            'installment_date_11' => 'nullable|date',
            'installment_amount_12' => 'nullable|numeric',
            'installment_date_12' => 'nullable|date',
            'installment_amount_13' => 'nullable|numeric',
            'installment_date_13' => 'nullable|date',
            'installment_amount_14' => 'nullable|numeric',
            'installment_date_14' => 'nullable|date',
            'installment_amount_15' => 'nullable|numeric',
            'installment_date_15' => 'nullable|date',
        ];
    }

    public function customers()
    {
        return Customer::all() ?? [];
    }

    public function shopSellPrice()
    {
        $shopSellPrice = $this->shop_id ? Shop::findOrFail($this->shop_id)->sell_price : 0;
        $this->insurance_amount = ($shopSellPrice * 10) / 100;
        $this->maintenance_deposit_amount = ($shopSellPrice * 5) / 100;
        $this->remaining_sale_amount = $shopSellPrice - $this->insurance_amount;
    }

    public function changeInsuranceAmount()
    {
        $shopSellPrice = $this->shop_id ? Shop::findOrFail($this->shop_id)->sell_price : 0;
        $this->remaining_sale_amount = $shopSellPrice - $this->insurance_amount;
    }

    public function changeDateByAuctionDate()
    {
        $this->insurance_date = $this->auction_date;
        $this->remaining_sale_date =  Helper::addMonthToDate($this->auction_date, 3);
        $this->maintenance_deposit_date = Helper::addMonthToDate($this->auction_date, 3);
    }

    public function shops()
    {
        $saleShopIds = ($this->sale_id)
            ? Sale::whereNot('shop_id', $this->sale->shop_id)->pluck('shop_id')->toArray()
            : Sale::pluck('shop_id')->toArray();

        return Shop::whereNotIn('id', $saleShopIds)->get() ?? [];
    }

    public function payments()
    {
        return ['cash', 'installment'];
    }

    public function setsale($id)
    {
        $this->sale = Sale::findOrFail($id);
        $this->sale_id = $this->sale->id;
        $this->customer_id = $this->sale->customer_id;
        $this->shop_id = $this->sale->shop_id;
        $this->auction_date = $this->sale->auction_date;
        $this->payment_method = $this->sale->payment_method;
        $this->insurance_amount = $this->sale->insurance_amount;
        $this->insurance_date = $this->sale->insurance_date;
        $this->remaining_sale_amount = $this->sale->remaining_sale_amount;
        $this->remaining_sale_date = $this->sale->remaining_sale_date;
        $this->maintenance_deposit_amount = $this->sale->maintenance_deposit_amount;
        $this->maintenance_deposit_date = $this->sale->maintenance_deposit_date;
        $this->afine_amount = $this->sale->afine_amount;
        $this->afine_date = $this->sale->afine_date;
        $this->installment_amount_1 = $this->sale->installment_amount_1;
        $this->installment_date_1 = $this->sale->installment_date_1;
        $this->installment_amount_2 = $this->sale->installment_amount_2;
        $this->installment_date_2 = $this->sale->installment_date_2;
        $this->installment_amount_3 = $this->sale->installment_amount_3;
        $this->installment_date_3 = $this->sale->installment_date_3;
        $this->installment_amount_4 = $this->sale->installment_amount_4;
        $this->installment_date_4 = $this->sale->installment_date_4;
        $this->installment_amount_5 = $this->sale->installment_amount_5;
        $this->installment_date_5 = $this->sale->installment_date_5;
        $this->installment_amount_6 = $this->sale->installment_amount_6;
        $this->installment_date_6 = $this->sale->installment_date_6;
        $this->installment_amount_7 = $this->sale->installment_amount_7;
        $this->installment_date_7 = $this->sale->installment_date_7;
        $this->installment_amount_8 = $this->sale->installment_amount_8;
        $this->installment_date_8 = $this->sale->installment_date_8;
        $this->installment_amount_9 = $this->sale->installment_amount_9;
        $this->installment_date_9 = $this->sale->installment_date_9;
        $this->installment_amount_10 = $this->sale->installment_amount_10;
        $this->installment_date_10 = $this->sale->installment_date_10;
        $this->installment_amount_11 = $this->sale->installment_amount_11;
        $this->installment_date_11 = $this->sale->installment_date_11;
        $this->installment_amount_12 = $this->sale->installment_amount_12;
        $this->installment_date_12 = $this->sale->installment_date_12;
        $this->installment_amount_13 = $this->sale->installment_amount_13;
        $this->installment_date_13 = $this->sale->installment_date_13;
        $this->installment_amount_14 = $this->sale->installment_amount_14;
        $this->installment_date_14 = $this->sale->installment_date_14;
        $this->installment_amount_15 = $this->sale->installment_amount_15;
        $this->installment_date_15 = $this->sale->installment_date_15;
    }

    public function storesale()
    {
        $validated = $this->validate();
        Sale::create($validated);
        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_created'));
        $this->reset();
    }

    public function updatesale()
    {
        $validated = $this->validate();
        $this->sale->update($validated);
        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_updated'));
        $this->reset();
    }

    public function deletesale($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();
        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeletesale($arr)
    {
        $sales = Sale::whereIn('id', $arr);
        $sales->delete();
        $this->dispatch('refresh-list-sale');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.sale_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
