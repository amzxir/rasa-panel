<?php

namespace App\Livewire\Panel\Discount;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert , WithFileUploads;

    public $code , $count , $discount , $category;

    protected $rules = [
        'code' => 'required',
        'count' => 'required',
        'discount' => 'required',
        'category' => 'required',
    ];

    public function ConfirmCreateDiscount (){

        $this->validate();

        $this->confirm(('از اطلاعات داده شده مطمئن هستید ؟'), [
            'toast' => false,
            // 'text' => 'edit category is possible',
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'بله',
            'cancelButtonText' => 'خیر',
            'onConfirmed' => 'Create',
        ]);
    }

    public function Create () {
        $this->alert('success', 'اطالاعات با موفقیت ثبت شد');
        $this->reset('link' , 'placement' , 'image');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.discount.create');
    }
}
