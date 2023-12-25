<?php

namespace App\Livewire\Panel\Send;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use LivewireAlert;

    public $name;

    protected $rules = [
        'name' => 'required|min:2',
    ];

    public function ConfirmCreateSend (){

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
        $this->reset('name');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.send.create');
    }
}
