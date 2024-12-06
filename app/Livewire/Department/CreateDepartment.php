<?php

namespace App\Livewire\Department;

use App\Models\Role;
use App\Traits\DepartmentTrait;
use Livewire\Component;

class CreateDepartment extends Component
{
    use DepartmentTrait;

    public function createModal()
    {
        $this->reset();
        $this->resetValidation();
        $this->create_modal = true;
    }

    public function save()
    {
        $this->storeDepartment();
    }

    public function render()
    {
        return view('livewire.department.create-department');
    }
}
