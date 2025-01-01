<?php

namespace App\Livewire\Customer;

use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateCustomer extends Component
{
    use CustomerTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
    }

    public function save()
    {
        $this->storeCustomer();
    }

    public function render()
    {
        $this->authorize('create-customer');

        return view('livewire.customer.create-customer');
    }
}
