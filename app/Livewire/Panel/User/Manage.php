<?php

namespace App\Livewire\Panel\User;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Manage extends Component
{
    use LivewireAlert;

    public $name , $mobile , $access;

    public function ConfirmEditUser () {
        $this->validate([
            'name' => 'required|min:2',
            'mobile' => 'required|digits:11|numeric',
            'access' => 'required',
        ]);

        $this->alert('success', 'دسته بندی با موفقیت ویرایش شد');
        $this->reset('mobile' , 'access' , 'name');
    }


    public function ConfirmUserOk () {

        $this->alert('success', 'کاربر با موفقیت تایید شد');
    }

    public function ConfirmUserNotOk () {
        $this->alert('success', 'کاربر با موفقیت رد شد');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'دسته بندی با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmEditUser',
        'ConfirmUserOk',
        'ConfirmUserNotOk',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.user.manage');
    }
}
