<?php

namespace App\Livewire\Customer;

use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class UpdateCustomer extends Component
{
    use CustomerTrait;

    #[On('edit-modal')]
    public function confirmEdit($id)
    {
        $this->reset();
        $this->resetValidation();
        $this->setCustomer($id);
        $this->edit_modal = true;
    }

    public function save()
    {
        $this->updateCustomer();
    }

    public function render()
    {
        $this->authorize('edit-customer');

        return view('livewire.customer.update-customer');
    }
}