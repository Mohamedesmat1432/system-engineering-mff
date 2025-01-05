<?php

namespace App\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;

class SearchableSelectCustomer extends Component
{
    public $query = '';
    public $items = [];
    public $selectedItem = null;

    public function mount()
    {
        $this->items = $this->searchItems($this->query);
    }

    public function selectItem($id)
    {
        $this->selectedItem = $id;
        $this->query = ''; // Reset search input after selection
        $this->items = [];
    }

    private function searchItems($query)
    {
        // Replace with your model or data fetching logic
        return Customer::search($query)
            ->take(10)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.customer.searchable-select-customer');
    }
}
