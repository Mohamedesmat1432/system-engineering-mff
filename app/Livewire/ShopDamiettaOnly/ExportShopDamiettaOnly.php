<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Exports\ShopDamiettaOnlyExport;
use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ExportShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;

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
            $this->dispatch('refresh-list-shop-damietta-only');
            $this->successNotify(__('site.shop_damietta_only_exported'));
            return (new ShopDamiettaOnlyExport($this->search))->download('shop-data-damietta-only.' . $this->extension);
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }
    public function render()
    {
        $this->authorize('export-shop-damietta-only');
        
        return view('livewire.shop-damietta-only.export-shop-damietta-only');
    }
}
