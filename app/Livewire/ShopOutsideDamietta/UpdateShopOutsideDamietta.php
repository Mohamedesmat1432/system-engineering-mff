<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class UpdateShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;

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
        $this->authorize('edit-shop-outside-damietta');

        return view('livewire.shop-outside-damietta.update-shop-outside-damietta');
    }
}
