<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Exports\ShopOutsideDamiettaExport;
use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class ExportShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;

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
            $this->dispatch('refresh-list-shop-outside-damietta');
            $this->successNotify(__('site.shop_outside_damietta_exported'));
            return (new ShopOutsideDamiettaExport($this->search))->download('shop-data-outside-damietta.' . $this->extension);
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }
    public function render()
    {
        $this->authorize('export-shop-outside-damietta');
        
        return view('livewire.shop-outside-damietta.export-shop-outside-damietta');
    }
}
