<?php

namespace App\Livewire\Sale;

use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class UpdateSale extends Component
{
    use SaleTrait;

    #[On('edit-modal')]
    public function confirmEdit($id)
    {
        $this->reset();
        $this->resetValidation();
        $this->setSale($id);
        $this->edit_modal = true;
    }

    public function save()
    {
        $this->updateSale();
    }

    public function render()
    {
        $this->authorize('edit-sale');

        return view('livewire.sale.update-sale');
    }
}
