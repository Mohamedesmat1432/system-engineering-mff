<?php

namespace App\Livewire\Shop;

use App\Exports\ShopsExport;
use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ExportShop extends Component
{
    use ShopTrait;

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
            $this->dispatch('refresh-list-shop');
            $this->successNotify(__('site.shop_exported'));
            return (new ShopsExport($this->search))->download('shop.' . $this->extension);
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }
    
    public function render()
    {
        $this->authorize('export-shop');
        
        return view('livewire.shop.export-shop');
    }
}
