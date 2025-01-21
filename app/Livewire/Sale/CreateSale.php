<?php

namespace App\Livewire\Sale;


use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateSale extends Component
{
    use SaleTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
        $this->addInstallment();
    }
    
    public function save()
    {
        $this->storeSale();
    }
    
    public function render()
    {
        $this->authorize('create-sale');
        
        return view('livewire.sale.create-sale');
    }
}
