<?php

namespace App\Livewire\Panel\Rasajet;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Create extends Component
{
    use LivewireAlert;

    public $order_receiver , $recipient_name , $mobile_receiver , $order;

    protected $rules = [
        'order_receiver' => 'required',
        'recipient_name' => 'required|min:2',
        'mobile_receiver' => 'required|numeric|digits:11',
        'order' => 'required|min:5',
    ];

    public function ConfirmCreateOrder (){

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
    }

    protected $listeners = [
        'Create'
    ];


    public function render()
    {
        return view('livewire.panel.rasajet.create');
    }
}
