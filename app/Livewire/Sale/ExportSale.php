<?php

namespace App\Livewire\Sale;

use App\Exports\SalesExport;
use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ExportSale extends Component
{
    use SaleTrait;

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
            $this->dispatch('refresh-list-sale');
            $this->successNotify(__('site.sale_exported'));
            return (new SalesExport($this->search))->download('sale.' . $this->extension);
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }
    
    public function render()
    {
        $this->authorize('export-sale');
        
        return view('livewire.sale.export-sale');
    }
}
