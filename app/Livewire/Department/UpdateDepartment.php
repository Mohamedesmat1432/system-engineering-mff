<?php

namespace App\Livewire\Department;

use App\Models\Role;
use App\Traits\DepartmentTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateDepartment extends Component
{
    use DepartmentTrait;

    #[On('edit-modal')]
    public function confirmEdit($id)
    {
        $this->reset();
        $this->resetValidation();
        $this->setDepartment($id);
        $this->edit_modal = true;
    }

    public function save()
    {
        $this->updateDepartment();
    }

    public function render()
    {
        return view('livewire.department.update-department');
    }
}
