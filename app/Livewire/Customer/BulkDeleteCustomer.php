<?php

namespace App\Livewire\Customer;

use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class BulkDeleteCustomer extends Component
{
    use CustomerTrait;
    public $count;

    #[On('bulk-delete-modal')]
    public function confirmDelete($arr)
    {
        $this->checkbox_arr = json_decode($arr);
        $this->count = count($this->checkbox_arr);
        $this->bulk_delete_modal = true;
    }

    public function delete()
    {
        $this->bulkDeleteCustomer($this->checkbox_arr);
    }

    public function render()
    {
        $this->authorize('bulk-delete-customer');

        return view('livewire.customer.bulk-delete-customer');
    }
}