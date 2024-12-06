<?php

namespace App\Traits;

use App\Models\Department;
use Livewire\WithPagination;

trait DepartmentTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?Department $department;

    public $name_ar, $name_en, $department_id;

    protected function rules()
    {
        $rules = [
            'name_ar' => 'required|string|max:255|unique:departments,name_ar,' . $this->department_id,
            'name_en' => 'required|string|max:255|unique:departments,name_en,' . $this->department_id,
        ];

        return $rules;
    }

    public function setDepartment($id)
    {
        $this->department = Department::findOrFail($id);
        $this->department_id = $this->department->id;
        $this->name_ar = $this->department->name_ar;
        $this->name_en = $this->department->name_en;
    }

    public function storeDepartment()
    {
        $this->authorize('create-department');
        $validated = $this->validate();
        Department::create($validated);
        $this->reset();
        $this->dispatch('refresh-list-department');
        $this->successNotify(__('site.department_created'));
        $this->create_modal = false;
    }

    public function updateDepartment()
    {
        $this->authorize('edit-department');
        $validated = $this->validate();
        $this->department->update($validated);
        $this->reset();
        $this->dispatch('refresh-list-department');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.department_updated'));
        $this->edit_modal = false;
    }

    public function deleteDepartment($id)
    {
        $this->authorize('delete-department');
        $department = Department::findOrFail($id);
        $department->delete();
        $this->reset();
        $this->dispatch('refresh-list-department');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.department_deleted'));
        $this->delete_modal = false;
    }

    public function bulkDeleteDepartment($arr)
    {
        $this->authorize('bulk-delete-department');
        $departments = Department::whereIn('id', $arr);
        $departments->delete();
        $this->reset();
        $this->dispatch('refresh-list-department');
        $this->dispatch('checkbox-clear');
        $this->dispatch('refresh-navigation-menu');
        $this->successNotify(__('site.department_delete_all'));
        $this->bulk_delete_modal = false;
    }
}