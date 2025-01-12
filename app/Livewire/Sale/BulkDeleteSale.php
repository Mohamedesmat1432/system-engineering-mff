<?php

namespace App\Livewire\Sale;

use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class BulkDeleteSale extends Component
{
    use SaleTrait;
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
        $this->bulkDeleteSale($this->checkbox_arr);
    }

    public function render()
    {
        $this->authorize('bulk-delete-sale');

        return view('livewire.sale.bulk-delete-sale');
    }
}
