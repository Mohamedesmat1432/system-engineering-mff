<?php

namespace App\Livewire\Permission;

use App\Traits\PermissionTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class CreatePermission extends Component
{
    use PermissionTrait;

    #[On('create-modal')]
    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
    }

    public function save()
    {
        $this->storePermission();
    }

    public function render()
    {
        $this->authorize('create-permission');

        return view('livewire.permission.create-permission');
    }
}
