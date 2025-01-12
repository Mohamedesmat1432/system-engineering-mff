<?php

namespace App\Livewire\Sale;

use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class DeleteSale extends Component
{
    use SaleTrait;

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
        $this->deleteSale($this->id);
    }

    public function render()
    {
        $this->authorize('delete-sale');

        return view('livewire.sale.delete-sale');
    }
}
