<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

    #[On('show-modal')]
    public function showModal($id)
    {
        $this->showShop($id);
        $this->show_modal = true;
    }

    public function render()
    {
        return view('livewire.order.show-order');
    }
}
