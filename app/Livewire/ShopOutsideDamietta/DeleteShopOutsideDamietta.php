<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class DeleteShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;

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
        $this->authorize('delete-shop-outside-damietta');

        return view('livewire.shop-outside-damietta.delete-shop-outside-damietta');
    }
}
