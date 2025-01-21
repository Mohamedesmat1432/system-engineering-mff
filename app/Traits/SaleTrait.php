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

    public $sale_id, $customer_id, $shop_id, $payment_method, $installment_count, $description;
    public $insurance = ['amount' => 0, 'date' => null, 'status' => 0];
    public $remaining_sale = ['amount' => 0, 'date' => null, 'status' => 0];
    public $maintenance_deposit = ['amount' => 0, 'date' => null, 'status' => 0];
    public $installment = ['amount' => 0, 'date' => null, 'status' => 0];
    public $installments = [];
    public $customer_search, $shop_search;

    protected function rules()
    {
        return [
            'customer_id' => 'required|string|exists:customers,id',
            'shop_id' => 'required|string|exists:shops,id',
            'payment_method' => 'required|string',
            'insurance.amount' => 'required|numeric',
            'insurance.date' => 'required|date',
            'remaining_sale.amount' => 'required|numeric',
            'remaining_sale.date' => 'required|date',
            'maintenance_deposit.amount' => 'required|numeric',
            'maintenance_deposit.date' => 'required|date',
            'description' => 'nullable|string|max:1000',
        ];
    }

    protected function installmentRules()
    {
        return [
            'installments.*.amount' => 'required|numeric',
            'installments.*.date' => 'required|date',
            'installments.*.status' => 'required|boolean',
        ];
    }

    public function customers()
    {
        return Customer::search($this->customer_search)->get() ?? [];
    }

    public function shopSellPrice()
    {
        $shop = Shop::findOrFail($this->shop_id);
        $shopSellPrice = $shop ? $shop->sell_price : 0;
        $shopAuctionDate = $shop ? $shop->auction_date : null;
        $this->insurance['amount'] = ($shopSellPrice * 10) / 100;
        $this->remaining_sale['amount'] = $shopSellPrice - $this->insurance['amount'];
        $this->maintenance_deposit['amount'] = ($shopSellPrice * 5) / 100;
        $this->changeDateByAuctionDate($shopAuctionDate);
    }

    public function changeInsuranceAmount()
    {
        $shop = Shop::findOrFail($this->shop_id);
        $shopSellPrice = $shop ? $shop->sell_price : 0;
        $this->remaining_sale['amount'] = $shopSellPrice - $this->insurance['amount'];
    }

    public function changeDateByAuctionDate($date)
    {
        $this->insurance['date'] = $date;
        $this->remaining_sale['date'] =  Helper::addMonthToDate($date, 3);
        $this->maintenance_deposit['date'] = Helper::addMonthToDate($date, 3);
    }

    public function shops()
    {
        $saleShopIds = ($this->sale_id)
            ? Sale::whereNot('shop_id', $this->sale->shop_id)->pluck('shop_id')->toArray()
            : Sale::pluck('shop_id')->toArray();

        return Shop::search($this->shop_search)->whereNotIn('id', $saleShopIds)->get() ?? [];
    }

    public function payments()
    {
        return ['cash', 'installment'];
    }

    public function changePayment()
    {
        if ($this->sale_id) {
            if (!empty($this->installments) && $this->payment_method !== 'installment') {
                $this->payment_method = 'installment';
                $this->successNotify(__('site.should_delete_installments_first'));
            } else {
                $this->addInstallment();
            }
        } else {
            $this->reset(['installments', 'installment_count']);
            if (empty($this->installments) && $this->payment_method === 'installment') {
                $this->addInstallment();
            }
        }
    }

    public function changeInstallmentCount()
    {
        if ($this->payment_method === 'installment') {
            if ($this->sale_id) {
                if ($this->installment_count > $this->sale->installment_count) {
                    $index = $this->sale->installment_count - 1;
                    $count = $this->installment_count - $this->sale->installment_count;
                    $this->installments = array_fill($index, $count, $this->installment);
                } else {
                    $this->installment_count = $this->sale->installment_count;
                }
            } else {
                $this->installments = array_fill(0, $this->installment_count, $this->installment);
            }
        }
    }

    public function addInstallment()
    {
        $this->installments[] = $this->installment;
    }

    public function removeInstallment($key)
    {
        unset($this->installments[$key]);
        $this->installments = array_values($this->installments);
    }

    public function storeSale()
    {
        $validated = $this->validate();

        $sale = Sale::create($validated);
        $sale->insurance()->create($this->insurance);
        $sale->remainingSale()->create($this->remaining_sale);
        $sale->maintenanceDeposit()->create($this->maintenance_deposit);

        if ($this->payment_method === 'installment') {
            $this->validate($this->installmentRules());
            foreach ($this->installments as $installment) {
                $sale->installments()->create($installment);
            }
        }
        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_created'));
        $this->reset();
    }


    public function setsale($id)
    {
        $this->sale = Sale::findOrFail($id);
        $this->sale_id = $this->sale->id;
        $this->customer_id = $this->sale->customer_id;
        $this->shop_id = $this->sale->shop_id;
        $this->payment_method = $this->sale->payment_method;
        $this->installment_count = $this->sale->installment_count;
        $this->description = $this->sale->description;
        $this->insurance = $this->sale->insurance->toArray();
        $this->remaining_sale = $this->sale->remainingSale->toArray();
        $this->maintenance_deposit = $this->sale->maintenanceDeposit->toArray();
        $this->installments = $this->sale->installments->toArray();
    }

    public function updateSale()
    {
        $validated = $this->validate();

        $this->sale->update($validated);
        $this->sale->insurance()->update($this->insurance);
        $this->sale->remainingSale()->update($this->remaining_sale);
        $this->sale->maintenanceDeposit()->update($this->maintenance_deposit);

        if ($this->payment_method === 'installment') {

            $this->validate($this->installmentRules());

            $providedInstallmentIds = collect($this->installments)->pluck('id')->filter()->toArray();
            $existingInstallments = $this->sale->installments;

            foreach ($this->installments as $installment) {
                if (isset($installment['id'])) {
                    $existInstallment = $this->sale->installments()->find($installment['id']);
                    if ($existInstallment) {
                        $existInstallment->update($installment);
                    }
                } else {
                    $this->sale->installments()->create($installment);
                }
            }

            foreach ($existingInstallments as $existingInstallment) {
                if (!in_array($existingInstallment->id, $providedInstallmentIds)) {
                    $existingInstallment->delete();
                }
            }
        }

        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_updated'));
        $this->reset();
    }

    public function deleteSale($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->insurance()->delete();
        $sale->remainingSale()->delete();
        $sale->maintenanceDeposit()->delete();
        if (isset($sale->installments)) {
            $sale->installments()->delete();
        }
        $sale->delete();
        $this->dispatch('refresh-list-sale');
        $this->successNotify(__('site.sale_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteSale($arr)
    {
        $sales = Sale::whereIn('id', $arr);
        foreach ($sales as $sale) {
            $sale->insurance()->delete();
            $sale->remainingSale()->delete();
            $sale->maintenanceDeposit()->delete();
            if ($sale->installment_method === 'installment') {
                $sale->installments()->delete();
            }
        }
        $sales->delete();
        $this->dispatch('refresh-list-sale');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.sale_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
