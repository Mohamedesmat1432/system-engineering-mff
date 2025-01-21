<?php

namespace App\Livewire\Customer;

use App\Exports\CustomersExport;
use App\Traits\CustomerTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ExportCustomer extends Component
{
    use CustomerTrait;

    #[On('export-modal')]
    public function exportModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->export_modal = true;
    }

    public function export()
    {
        try {
            $this->export_modal = false;
            $this->dispatch('refresh-list-customer');
            $this->successNotify(__('site.customer_exported'));
            return (new CustomersExport($this->search))->download('customer.' . $this->extension);
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }
    
    public function render()
    {
        $this->authorize('export-customer');
        
        return view('livewire.customer.export-customer');
    }
}
