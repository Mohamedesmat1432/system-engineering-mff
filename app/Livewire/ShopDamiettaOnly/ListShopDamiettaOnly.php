<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Models\DataShopDamiettaOnly;
use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ListShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

    #[On('refresh-list-shop-damietta-only')]
    public function render()
    {
        $this->authorize('view-shop-damietta-only');

        $shops = DataShopDamiettaOnly::search($this->search)->paginate($this->page_element);

        $this->checkbox_all = DataShopDamiettaOnly::pluck('id')->toArray();

        return view('livewire.shop-damietta-only.list-shop-damietta-only', ['shops' => $shops]);
    }
}
