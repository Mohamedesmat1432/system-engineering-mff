<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->installments = array_fill(0,15,$this->installments);
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
