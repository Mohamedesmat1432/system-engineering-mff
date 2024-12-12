<?php

namespace App\Livewire\ShopOutsideDamietta;

use App\Traits\ShopOutsideDamiettaTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class BulkDeleteShopOutsideDamietta extends Component
{
    use ShopOutsideDamiettaTrait;
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
        $this->authorize('bulk-delete-shop-outside-damietta');

        return view('livewire.shop-outside-damietta.bulk-delete-shop-outside-damietta');
    }
}
