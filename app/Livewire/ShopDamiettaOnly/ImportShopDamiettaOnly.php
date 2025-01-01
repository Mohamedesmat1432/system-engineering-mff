<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Imports\ShopDamiettaOnlyImport;
use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class ImportShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait, WithFileUploads;

    public $file;

    #[On('import-modal')]
    public function importModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->import_modal = true;
    }

    
    public function import(ShopDamiettaOnlyImport $import)
    {
        $this->validate(['file' => 'required|file|mimes:xlsx,xls,csv|max:1024']);
        try {
            $this->import_modal = false;
            $this->dispatch('refresh-list-shop-damietta-only');
            $this->successNotify(__('site.shop_damietta_only_imported'));
            return $import->import($this->file->getRealPath());
        } catch (\Throwable $e) {
            $this->errorNotify($e->getMessage());
        }
    }

    public function render()
    {
        $this->authorize('import-shop-damietta-only');

        return view('livewire.shop-damietta-only.import-shop-damietta-only');
    }
}
