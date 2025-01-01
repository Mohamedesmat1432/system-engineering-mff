<?php

namespace App\Livewire\Customer;

use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class DeleteCustomer extends Component
{
    use CustomerTrait;

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
        $this->deleteCustomer($this->id);
    }

    public function render()
    {
        $this->authorize('delete-customer');

        return view('livewire.customer.delete-customer');
    }
}