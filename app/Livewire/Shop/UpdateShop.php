<?php

namespace App\Livewire\Shop;

use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class UpdateShop extends Component
{
    use ShopTrait;

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
        $this->authorize('edit-shop');

        return view('livewire.shop.update-shop');
    }
}
