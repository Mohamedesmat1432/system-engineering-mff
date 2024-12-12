<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Models\DataShopOutsideDamietta;
use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ListShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;

    #[On('refresh-list-shop-outside-damietta')]
    public function render()
    {
        $this->authorize('view-shop-outside-damietta');

        $shops = DataShopOutsideDamietta::search($this->search)->paginate($this->page_element);

        $this->checkbox_all = DataShopOutsideDamietta::pluck('id')->toArray();

        return view('livewire.shop-outside-damietta.list-shop-outside-damietta', ['shops' => $shops]);
    }
}
