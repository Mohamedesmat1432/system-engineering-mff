<?php

namespace App\Livewire\Shop;

use App\Traits\ShopTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class BulkDeleteShop extends Component
{
    use ShopTrait;
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
        $this->authorize('bulk-delete-shop');

        return view('livewire.shop.bulk-delete-shop');
    }
}
