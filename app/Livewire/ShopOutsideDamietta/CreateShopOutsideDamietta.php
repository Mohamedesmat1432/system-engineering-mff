<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
    }
    
    public function save()
    {
        $this->storeShop();
    }
    
    public function render()
    {
        $this->authorize('create-shop-outside-damietta');
        
        return view('livewire.shop-outside-damietta.create-shop-outside-damietta');
    }
}
