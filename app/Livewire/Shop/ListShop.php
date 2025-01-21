<?php

namespace App\Livewire\Shop;

use App\Models\Shop;
use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ListShop extends Component
{
    use ShopTrait;

    #[On('refresh-list-shop')]
    public function render()
    {
        $this->authorize('view-shop');

        $shops = Shop::search($this->search)->searchByGovernment($this->search_by_government)
            ->searchByCity($this->search_by_city)
            ->orderBy($this->sort_by, $this->sort_asc ? 'ASC' : 'DESC')
            ->paginate($this->page_element);

        $this->checkbox_all = Shop::pluck('id')->toArray();

        return view('livewire.shop.list-shop', ['shops' => $shops]);
    }
}
