<?php

namespace App\Livewire\Panel\Comission;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Create extends Component
{
    use LivewireAlert;

    public $commission;

    protected $rules = [
        'commission' => 'required|numeric',
    ];

    public function ConfirmCreateCommission (){

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
        $this->reset('commission');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.comission.create');
    }
}
