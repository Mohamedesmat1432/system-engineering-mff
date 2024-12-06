<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Component;

class CreateShop extends Component
{
    use ShopOutsideDamiettaTrait;

    public function save()
    {
        $this->storeShop();
    }
    
    public function render()
    {
        return view('livewire.shop-outside-damietta.create-shop');
    }
}
