<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

    #[On('edit-modal')]
    public function confirmEdit($id)
    {
        $this->reset();
        $this->resetValidation();
        $this->setShop($id);
        $this->edit_modal = true;
    }

    public function save()
    {
        $this->updateShop();
    }

    public function render()
    {
        $this->authorize('edit-shop-damietta-only');

        return view('livewire.shop-damietta-only.update-shop-damietta-only');
    }
}
