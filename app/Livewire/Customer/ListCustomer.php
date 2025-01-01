<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ListCustomer extends Component
{
    use CustomerTrait;

    #[On('refresh-list-customer')]
    public function render()
    {
        $this->authorize('view-customer');

        $customers = Customer::search($this->search)
            ->orderBy($this->sort_by, $this->sort_asc ? 'ASC' : 'DESC')
            ->paginate($this->page_element);

        $this->checkbox_all = Customer::pluck('id')->toArray();

        return view('livewire.customer.list-customer', [
            'customers' => $customers,
        ]);
    }
}
