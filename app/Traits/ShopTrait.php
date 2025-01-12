<?php

namespace App\Traits;

use App\Models\City;
use App\Models\Shop;
use App\Models\Government;
use Livewire\WithPagination;

trait ShopTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?Shop $shop;

    public $shop_id, $government_id, $city_id, $center, $location,
        $building_number, $building_entrance_number, $shop_number, $type_of_shop,
        $shop_area, $sell_price, $sell_price_for_meter;

    protected function rules()
    {
        return [
            'government_id' => 'required|numeric|exists:governments,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'center' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'building_number' => 'required|numeric',
            'building_entrance_number' => 'required|numeric',
            'shop_number' => 'required|numeric',
            'type_of_shop' => 'required|string|max:255',
            'shop_area' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'sell_price_for_meter' => 'required|numeric',
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

    public function sellPriceForMeter()
    {
        $this->sell_price_for_meter = intval($this->sell_price / $this->shop_area);
    }

    public function setShop($id)
    {
        $this->shop = Shop::findOrFail($id);
        $this->shop_id = $this->shop->id;
        $this->government_id = $this->shop->government_id;
        $this->city_id = $this->shop->city_id;
        $this->center = $this->shop->center;
        $this->location = $this->shop->location;
        $this->building_number = $this->shop->building_number;
        $this->building_entrance_number = $this->shop->building_entrance_number;
        $this->shop_number = $this->shop->shop_number;
        $this->type_of_shop = $this->shop->type_of_shop;
        $this->shop_area = $this->shop->shop_area;
        $this->building_number = $this->shop->building_number;
        $this->sell_price = $this->shop->sell_price;
        $this->sell_price_for_meter = $this->shop->sell_price_for_meter;
    }

    public function storeShop()
    {
        $validated = $this->validate();
        Shop::create($validated);
        $this->dispatch('refresh-list-shop');
        $this->successNotify(__('site.shop_created'));
        $this->reset();
    }

    public function updateShop()
    {
        $validated = $this->validate();
        $this->shop->update($validated);
        $this->dispatch('refresh-list-shop');
        $this->successNotify(__('site.shop_updated'));
        $this->reset();
    }

    public function deleteShop($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        $this->dispatch('refresh-list-shop');
        $this->successNotify(__('site.shop_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteShop($arr)
    {
        $shops = Shop::whereIn('id', $arr);
        $shops->delete();
        $this->dispatch('refresh-list-shop');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.shop_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
