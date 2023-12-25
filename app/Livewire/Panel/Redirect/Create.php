<?php

namespace App\Livewire\Panel\Redirect;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Create extends Component
{
    use LivewireAlert;

    public $old_address , $new_address;

    protected $rules = [
        'old_address' => 'required',
        'new_address' => 'required',

    ];

    public function ConfirmCreateRoute (){

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
        $this->reset('old_address' , 'new_address');
    }

    protected $listeners = [
        'Create'
    ];


    public function render()
    {
        return view('livewire.panel.redirect.create');
    }
}
