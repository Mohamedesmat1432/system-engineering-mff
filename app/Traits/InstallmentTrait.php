<?php

namespace App\Traits;

use App\Models\Installment;
use Livewire\WithPagination;

trait InstallmentTrait
{
    use WithNotify, SortSearchTrait, WithPagination, ModalTrait;

    public ?Installment $installment;

    public $installment_sale_id, $installment_number, $installment_amount, $installment_date, $installment_is_paid;

    protected function rules()
    {
        return [
            'installment_sale_id' => 'required|numeric|exists:sales,id',
            'installment_amount' => 'nullable|numeric',
            'installment_date' => 'nullable|date',
            'installment_is_paid' => 'boolean|in:0,1',
        ];
    }

    public function storeInstallment()
    {
        $validated = $this->validate();
        Installment::create($validated);
        $this->dispatch('refresh-list-installment');
        $this->successNotify(__('site.installment_created'));
        $this->reset();
    }

    public function setInstallment($id)
    {
        $this->installment = Installment::findOrFail($id);
        $this->installment_id = $this->installment->id;
        $this->installment_sale_id = $this->installment->installment_sale_id;
        $this->installment_number = $this->installment->installment_number;
        $this->installment_amount = $this->installment->installment_amount;
        $this->installment_date = $this->installment->installment_date;
        $this->installment_is_paid = $this->installment->installment_is_paid;
    }

    public function updateInstallment()
    {
        $validated = $this->validate();
        $this->installment->update($validated);
        $this->dispatch('refresh-list-installment');
        $this->successNotify(__('site.installment_updated'));
        $this->reset();
    }

    public function deleteInstallment($id)
    {
        $installment = Installment::findOrFail($id);
        $installment->delete();
        $this->dispatch('refresh-list-installment');
        $this->successNotify(__('site.installment_deleted'));
        $this->delete_modal = false;
        $this->reset();
    }

    public function bulkDeleteInstallment($arr)
    {
        $installments = Installment::whereIn('id', $arr);
        $installments->delete();
        $this->dispatch('refresh-list-installment');
        $this->dispatch('checkbox-clear');
        $this->successNotify(__('site.installment_delete_all'));
        $this->bulk_delete_modal = false;
        $this->reset();
    }
}
