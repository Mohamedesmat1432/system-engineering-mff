<?php

namespace App\Livewire\Department;

use App\Traits\DepartmentTrait;
use Livewire\Attributes\On;
use Livewire\Component;

class BulkDeleteDepartment extends Component
{
    use DepartmentTrait;
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
        $this->bulkDeleteDepartment($this->checkbox_arr);
    }

    public function render()
    {
        return view('livewire.department.bulk-delete-department');
    }
}
