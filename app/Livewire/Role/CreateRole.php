<?php

namespace App\Livewire\Role;

use App\Traits\RoleTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateRole extends Component
{
    use RoleTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
    }

    public function save()
    {
        $this->storeRole();
    }

    public function render()
    {
        $this->authorize('create-role');

        return view('livewire.role.create-role');
    }
}
