<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

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
        $this->authorize('create-shop-damietta-only');

        return view('livewire.shop-damietta-only.create-shop-damietta-only');
    }
}
