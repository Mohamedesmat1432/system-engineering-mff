<?php

namespace App\Livewire\Sale;


use App\Models\Sale;
use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ListSale extends Component
{
    use SaleTrait;

    #[On('refresh-list-sale')]
    public function render()
    {
        $this->authorize('view-sale');

        $sales = Sale::with(['customer', 'shop'])->search($this->search)
            ->orderBy($this->sort_by, $this->sort_asc ? 'ASC' : 'DESC')
            ->paginate($this->page_element);

        $this->checkbox_all = Sale::pluck('id')->toArray();

        return view('livewire.sale.list-sale', ['sales' => $sales]);
    }
}
