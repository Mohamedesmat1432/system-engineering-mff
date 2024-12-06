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

    public $government_id, $auction_date, $city_id, $location,
        $building_number, $building_entrance_number, $shop_number,
        $type_of_shop, $buyer_name, $national_number, $count_of_national_number,
        $phone_number, $home_number, $sell_price, $sell_price_for_meter,
        $payment_method, $insurance_price, $insurance_date, 
        $remaining_amount_sale_price, $remaining_amount_sale_date,
        $maintenance_deposit_price, $maintenance_deposit_date, $shop_id;

    protected function rules()
    {
        $rules = [
            'government_id' => 'required|numeric|exists:governments,id',
            'auction_date' => 'required|date',
            'city_id' => 'required|numeric|exists:cities,id',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'buyer_name' => 'required|string|max:255',
            'national_number' => 'required|string|min:14|max:14',
            'count_of_national_number' => 'required|numeric',
            'phone_number' => 'required|string|min:11|max:15',
            'home_number' => 'nullable|string|min:7|max:10',
            'sell_price' => 'required|numeric',
            'sell_price_for_meter' => 'required|numeric',
            'payment_method' => 'required|string',
            'insurance_price' => 'required|numeric',
            'insurance_date' => 'required|date',
            'remaining_amount_sale_price' => 'required|numeric',
            'remaining_amount_sale_date' => 'required|date',
            'maintenance_deposit_price' => 'required|numeric',
            'maintenance_deposit_date' => 'required|date',
        ];

        return $rules;
    }

    public function governments()
    {
        return Government::pluck('name_'. app()->getLocale(), 'id')->toArray();
    }

    public function cities()
    {
        return City::where('government_id',$this->government_id)
            ->pluck('name_'. app()->getLocale(), 'id')->toArray() ?? [];
    }


    public function setShop($id)
    {
        $this->shop = DataShopOutsideDamietta::findOrFail($id);
        $this->shop_id = $this->shop->id;
        $this->government_id = $this->shop->government_id;
        $this->auction_date = $this->shop->auction_date;
        $this->city_id = $this->shop->city_id;
        $this->location = $this->shop->location;
        $this->building_number = $this->shop->building_number;
        $this->building_entrance_number = $this->shop->building_entrance_number;
        $this->shop_number = $this->shop->shop_number;
        $this->building_number = $this->shop->building_number;
        $this->phone_number = $this->shop->phone_number;
        $this->home_number = $this->shop->home_number;
        $this->sell_price = $this->shop->sell_price;
        $this->sell_price_for_meter = $this->shop->sell_price_for_meter;
        $this->payment_method = $this->shop->payment_method;
        $this->insurance_price = $this->shop->insurance_price;
        $this->insurance_date = $this->shop->insurance_date;
        $this->remaining_amount_sale_price = $this->shop->remaining_amount_sale_price;
        $this->remaining_amount_sale_date = $this->shop->remaining_amount_sale_price;
        $this->maintenance_deposit_price = $this->shop->maintenance_deposit_price;
        $this->maintenance_deposit_date = $this->shop->maintenance_deposit_date;
    }

    public function storeShop()
    {
        $this->authorize('create-shop-outside-damietta');
        $validated = $this->validate();
        DataShopOutsideDamietta::create($validated);
        $this->reset();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->successNotify(__('site.shop_outside_damietta_created'));
        $this->create_modal = false;
    }

    public function updateShop()
    {
        $this->authorize('edit-shop-outside-damietta');
        $validated = $this->validate();
        $this->shop->update($validated);
        $this->reset();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.shop_outside_damietta_updated'));
        $this->edit_modal = false;
    }

    public function deleteShop($id)
    {
        $this->authorize('delete-shop-outside-damietta');
        $shop = DataShopOutsideDamietta::findOrFail($id);
        $shop->delete();
        $this->reset();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.shop_outside_damietta_deleted'));
        $this->delete_modal = false;
    }

    public function bulkDeleteShop($arr)
    {
        $this->authorize('bulk-delete-shop-outside-damietta');
        $shops = DataShopOutsideDamietta::whereIn('id', $arr);
        $shops->delete();
        $this->reset();
        $this->dispatch('refresh-list-shop-outside-damietta');
        $this->dispatch('checkbox-clear');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.shop_outside_damietta_delete_all'));
        $this->bulk_delete_modal = false;
    }
}
