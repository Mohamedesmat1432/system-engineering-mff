<?php

namespace App\Traits;

use App\Models\City;
use App\Models\DataShopDamiettaOnly;
use App\Models\Government;
use Livewire\WithPagination;

trait ShopDamiettaOnlyTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?DataShopDamiettaOnly $shop;

    public $shop_id, $government_id, $auction_date, $city_id, $center, $location,
        $building_number, $building_entrance_number, $shop_number, $type_of_shop,
        $shop_area, $buyer_name, $national_number, $count_of_national_number,
        $phone_number, $home_number, $sell_price, $sell_price_for_meter, $payment_method,
        $insurance_amount, $insurance_date, $remaining_sale_amount, $remaining_sale_date,
        $maintenance_deposit_amount, $maintenance_deposit_date,
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
            'government_id' => 'required|numeric|exists:governments,id',
            'auction_date' => 'required|date',
            'city_id' => 'required|numeric|exists:cities,id',
            'center' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'shop_area' => 'required|numeric',
            'buyer_name' => 'required|string|max:255',
            'national_number' => 'required|string|min:14|max:14',
            'count_of_national_number' => 'nullable|numeric',
            'phone_number' => 'required|string|min:11|max:15',
            'home_number' => 'nullable|string|min:7|max:10',
            'sell_price' => 'required|numeric',
            'sell_price_for_meter' => 'required|numeric',
            'payment_method' => 'nullable|string',
            'insurance_amount' => 'nullable|numeric',
            'insurance_date' => 'nullable|date',
            'remaining_sale_amount' => 'nullable|numeric',
            'remaining_sale_date' => 'nullable|date',
            'maintenance_deposit_amount' => 'nullable|numeric',
            'maintenance_deposit_date' => 'nullable|date',
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

    public function countNationalId()
    {
        $this->count_of_national_number = strlen($this->national_number);
    }

    public function setShop($id)
    {
        $this->shop = DataShopDamiettaOnly::findOrFail($id);
        $this->shop_id = $this->shop->id;
        $this->government_id = $this->shop->government_id;
        $this->auction_date = $this->shop->auction_date;
        $this->city_id = $this->shop->city_id;
        $this->center = $this->shop->center;
        $this->location = $this->shop->location;
        $this->building_number = $this->shop->building_number;
        $this->building_entrance_number = $this->shop->building_entrance_number;
        $this->shop_number = $this->shop->shop_number;
        $this->type_of_shop = $this->shop->type_of_shop;
        $this->shop_area = $this->shop->shop_area;
        $this->building_number = $this->shop->building_number;
        $this->buyer_name = $this->shop->buyer_name;
        $this->national_number = $this->shop->national_number;
        $this->count_of_national_number = $this->shop->count_of_national_number;
        $this->phone_number = $this->shop->phone_number;
        $this->home_number = $this->shop->home_number;
        $this->sell_price = $this->shop->sell_price;
        $this->sell_price_for_meter = $this->shop->sell_price_for_meter;
        $this->payment_method = $this->shop->payment_method;
        $this->insurance_amount = $this->shop->insurance_amount;
        $this->insurance_date = $this->shop->insurance_date;
        $this->remaining_sale_amount = $this->shop->remaining_sale_amount;
        $this->remaining_sale_date = $this->shop->remaining_sale_date;
        $this->maintenance_deposit_amount = $this->shop->maintenance_deposit_amount;
        $this->maintenance_deposit_date = $this->shop->maintenance_deposit_date;
        $this->installment_amount_1 = $this->shop->installment_amount_1;
        $this->installment_date_1 = $this->shop->installment_date_1;
        $this->installment_amount_2 = $this->shop->installment_amount_2;
        $this->installment_date_2 = $this->shop->installment_date_2;
        $this->installment_amount_3 = $this->shop->installment_amount_3;
        $this->installment_date_3 = $this->shop->installment_date_3;
        $this->installment_amount_4 = $this->shop->installment_amount_4;
        $this->installment_date_4 = $this->shop->installment_date_4;
        $this->installment_amount_5 = $this->shop->installment_amount_5;
        $this->installment_date_5 = $this->shop->installment_date_5;
        $this->installment_amount_6 = $this->shop->installment_amount_6;
        $this->installment_date_6 = $this->shop->installment_date_6;
        $this->installment_amount_7 = $this->shop->installment_amount_7;
        $this->installment_date_7 = $this->shop->installment_date_7;
        $this->installment_amount_8 = $this->shop->installment_amount_8;
        $this->installment_date_8 = $this->shop->installment_date_8;
        $this->installment_amount_9 = $this->shop->installment_amount_9;
        $this->installment_date_9 = $this->shop->installment_date_9;
        $this->installment_amount_10 = $this->shop->installment_amount_10;
        $this->installment_date_10 = $this->shop->installment_date_10;
        $this->installment_amount_11 = $this->shop->installment_amount_11;
        $this->installment_date_11 = $this->shop->installment_date_11;
        $this->installment_amount_12 = $this->shop->installment_amount_12;
        $this->installment_date_12 = $this->shop->installment_date_12;
        $this->installment_amount_13 = $this->shop->installment_amount_13;
        $this->installment_date_13 = $this->shop->installment_date_13;
        $this->installment_amount_14 = $this->shop->installment_amount_14;
        $this->installment_date_14 = $this->shop->installment_date_14;
        $this->installment_amount_15 = $this->shop->installment_amount_15;
        $this->installment_date_15 = $this->shop->installment_date_15;
    }

    public function governments()
    {
        return Government::pluck('name_' . app()->getLocale(), 'id')->toArray();
    }

    public function cities()
    {
        return City::where('government_id', $this->government_id ?? $this->search_by_government)
            ->pluck('name_' . app()->getLocale(), 'id')->toArray() ?? [];
    }

    public function storeShop()
    {
        $validated = $this->validate();
        $validated['count_of_national_number'] = $this->count_of_national_number;
        DataShopDamiettaOnly::create($validated);
        $this->dispatch('refresh-list-shop-damietta-only');
        $this->successNotify(__('site.shop_damietta_only_created'));
        $this->reset();
    }

    public function updateShop()
    {
        $validated = $this->validate();
        $validated['count_of_national_number'] = $this->count_of_national_number;
        $this->shop->update($validated);
        $this->dispatch('refresh-list-shop-damietta-only');
        $this->successNotify(__('site.shop_damietta_only_updated'));
        $this->reset();
    }

    public function deleteShop($id)
    {
        $shop = DataShopDamiettaOnly::findOrFail($id);
        $shop->delete();
        $this->dispatch('refresh-list-shop-damietta-only');
        $this->successNotify(__('site.shop_damietta_only_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteShop($arr)
    {
        $shops = DataShopDamiettaOnly::whereIn('id', $arr);
        $shops->delete();
        $this->dispatch('refresh-list-shop-damietta-only');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.shop_damietta_only_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
