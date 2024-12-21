<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class DeleteShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

    #[Locked]
    public $id, $name;

    #[On('delete-modal')]
    public function confirmDelete($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->delete_modal = true;
    }

    public function delete()
    {
        $this->deleteShop($this->id);
    }

    public function render()
    {
        $this->authorize('delete-shop-damietta-only');

        return view('livewire.shop-damietta-only.delete-shop-damietta-only');
    }
}
