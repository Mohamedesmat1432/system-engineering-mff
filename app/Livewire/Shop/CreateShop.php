<?php

namespace App\Livewire\Shop;

use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateShop extends Component
{
    use ShopTrait;

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
        $this->authorize('create-shop');
        
        return view('livewire.shop.create-shop');
    }
}