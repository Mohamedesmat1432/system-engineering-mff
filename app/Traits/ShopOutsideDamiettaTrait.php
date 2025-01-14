<?php

namespace App\Traits;

use App\Models\City;
use App\Models\DataShopOutsideDamietta;
use App\Models\Government;
use Livewire\WithPagination;

trait ShopOutsideDamiettaTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?DataShopOutsideDamietta $shop;

    public $shop_id, $government_id, $auction_date, $city_id, $center, $location,
        $building_number, $building_entrance_number, $shop_number, $type_of_shop,
        $shop_area, $buyer_name, $national_number, $count_of_national_number,
        $phone_number, $home_number, $sell_price, $sell_price_for_meter, $payment_method,
        $insurance_amount, $insurance_date, $remaining_sale_amount, $remaining_sale_date,
        $maintenance_deposit_amount, $maintenance_deposit_date, $afine_amount, $afine_date;

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
            'afine_amount' => 'nullable|numeric',
            'afine_date' => 'nullable|date',
        ];
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
    
    public function countNationalId()
    {
        $this->count_of_national_number = strlen($this->national_number);
    }

    public function setShop($id)
    {
        $this->shop = DataShopOutsideDamietta::findOrFail($id);
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
        $this->afine_amount = $this->shop->afine_amount;
        $this->afine_date = $this->shop->afine_date;
    }

    public function storeShop()
    {
        $validated = $this->validate();
        $validated['count_of_national_number'] = $this->count_of_national_number;
        DataShopOutsideDamietta::create($validated);
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->successNotify(__('site.shop_outside_damietta_created'));
        $this->reset();
    }

    public function updateShop()
    {
        $validated = $this->validate();
        $validated['count_of_national_number'] = $this->count_of_national_number;
        $this->shop->update($validated);
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->successNotify(__('site.shop_outside_damietta_updated'));
        $this->reset();
    }

    public function deleteShop($id)
    {
        $shop = DataShopOutsideDamietta::findOrFail($id);
        $shop->delete();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->successNotify(__('site.shop_outside_damietta_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteShop($arr)
    {
        $shops = DataShopOutsideDamietta::whereIn('id', $arr);
        $shops->delete();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.shop_outside_damietta_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
