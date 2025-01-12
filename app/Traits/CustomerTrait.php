<?php

namespace App\Traits;

use App\Models\Customer;
use Livewire\WithPagination;

trait CustomerTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?Customer $customer;

    public $customer_id, $customer_name, $national_number, $count_national_number, 
        $count_phone_number, $phone_number, $home_number;

    protected function rules()
    {
        return [
            'customer_name' => 'required|string|max:255',
            'national_number' => 'required|string|min:14|max:14|unique:customers,national_number,' . $this->customer_id,
            'count_national_number' => 'nullable|numeric',
            'phone_number' => 'required|string|min:11|max:11',
            'home_number' => 'nullable|string|min:10|max:11',
        ];
    }

    public function countNationalId()
    {
        $this->count_national_number = strlen($this->national_number);
    }

    public function countPhoneNumber()
    {
        $this->count_phone_number = strlen($this->phone_number);
    }

    public function setCustomer($id)
    {
        $this->customer = Customer::findOrFail($id);
        $this->customer_id = $this->customer->id;
        $this->customer_name = $this->customer->customer_name;
        $this->national_number = $this->customer->national_number;
        $this->count_national_number = $this->customer->count_national_number;
        $this->phone_number = $this->customer->phone_number;
        $this->home_number = $this->customer->home_number;
        $this->countPhoneNumber();
    }

    public function storeCustomer()
    {
        $validated = $this->validate();
        Customer::create($validated);
        $this->dispatch('refresh-list-customer');
        $this->successNotify(__('site.customer_created'));
        $this->create_modal = false;
        $this->reset();
    }

    public function updateCustomer()
    {
        $validated = $this->validate();
        $this->customer->update($validated);
        $this->dispatch('refresh-list-customer');
        $this->successNotify(__('site.customer_updated'));
        $this->edit_modal = false;
        $this->reset();
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        $this->dispatch('refresh-list-customer');
        $this->successNotify(__('site.customer_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteCustomer($arr)
    {
        $customers = Customer::whereIn('id', $arr);
        $customers->delete();
        $this->dispatch('refresh-list-customer');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.customer_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
