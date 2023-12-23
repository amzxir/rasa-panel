<?php

namespace App\Livewire\Panel\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;


use Livewire\Component;

class Manage extends Component
{
    use LivewireAlert;

    public $search , $name , $code , $category , $status;

    public function ConfirmFilter () {
        $this->alert('success', 'فیلتر با موفقیت انجام شد');
    }

    public function ConfirmProductOk () {
        $this->alert('success', 'محصول با موفقیت تایید شد');
    }

    public function ConfirmProductNotOk () {
        $this->alert('success', 'محصول با موفقیت عدم تایید شد');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'محصول با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmFilter',
        'ConfirmProductOk',
        'ConfirmProductNotOk',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.product.manage');
    }
}
