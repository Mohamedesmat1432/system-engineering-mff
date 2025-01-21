<?php

namespace App\Livewire\Sale;

use App\Traits\SaleTrait;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class ShowSale extends Component
{
    use SaleTrait;

    #[On('show-modal')]
    public function show($id)
    {
        $this->reset();
        $this->setSale($id);
        $this->show_modal = true;
    }

    public function render()
    {
        $this->authorize('show-sale');

        return view('livewire.sale.show-sale');
    }
}
