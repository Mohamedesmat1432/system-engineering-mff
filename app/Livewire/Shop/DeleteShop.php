<?php

namespace App\Livewire\Shop;

use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class DeleteShop extends Component
{
    use ShopTrait;

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
        $this->authorize('delete-shop');

        return view('livewire.shop.delete-shop');
    }
}
