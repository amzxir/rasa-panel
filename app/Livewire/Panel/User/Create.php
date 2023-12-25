<?php

namespace App\Livewire\Panel\User;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Create extends Component
{
    use LivewireAlert;

    public $name , $mobile , $password , $access;

    protected $rules = [
        'name' => 'required|min:2',
        'mobile' => 'required|numeric|digits:11',
        'password' => 'required',
        'access' => 'required',
    ];

    public function ConfirmCreateUser (){

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
        $this->reset('name' , 'mobile' , 'password' , 'access');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.user.create');
    }
}
