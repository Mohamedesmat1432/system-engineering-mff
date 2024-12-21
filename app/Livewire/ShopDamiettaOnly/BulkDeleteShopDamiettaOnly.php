<?php

namespace App\Livewire\ShopDamiettaOnly;

use App\Traits\ShopDamiettaOnlyTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class BulkDeleteShopDamiettaOnly extends Component
{
    use ShopDamiettaOnlyTrait;
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
        $this->bulkDeleteShop($this->checkbox_arr);
    }

    public function render()
    {
        $this->authorize('bulk-delete-shop-damietta-only');

        return view('livewire.shop-damietta-only.bulk-delete-shop-damietta-only');
    }
}
