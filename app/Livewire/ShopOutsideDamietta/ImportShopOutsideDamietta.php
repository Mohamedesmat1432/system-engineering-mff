<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Imports\ShopOutsideDamiettaImport;
use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImportShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait, WithFileUploads;

    public $file;

    #[On('import-modal')]
    public function importModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->import_modal = true;
    }

    
    public function import(ShopOutsideDamiettaImport $import)
    {
        $this->validate(['file' => 'required|file|mimes:xlsx,xls,csv|max:1024']);
        try {
            $this->import_modal = false;
            $this->dispatch('refresh-list-shop-outside-damietta');
            $this->successNotify(__('site.orders_imported'));
            return $import->import($this->file->getRealPath());
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.shop-outside-damietta.import-shop-outside-damietta');
    }
}
