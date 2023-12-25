<?php

namespace App\Livewire\Panel\Center;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Message extends Component
{
    use LivewireAlert;

    public $name , $title , $role , $message;

    protected $rules = [
        'name' => 'required|min:2',
        'title' => 'required|min:2',
        'role' => 'required',
        'message' => 'required|min:5',
    ];

    public function ConfirmCreatemessage (){

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
        $this->reset('name' , 'title' , 'role' , 'message');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.center.message');
    }
}
