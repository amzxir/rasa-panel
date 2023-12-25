<?php

namespace App\Livewire\Panel\Formsaz;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Create extends Component
{
    use LivewireAlert;

    public $field , $menu , $peroperty , $compelete , $see , $separator , $category;

    protected $rules = [
        'category' => 'required|min:2',
        'field' => 'required|min:2',
        'menu' => 'required',
        'peroperty' => 'required',
        'compelete' => 'required',
        'see' => 'required',
        'separator' => 'required|min:5',
    ];

    public function ConfirmCreateFormsaz (){

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
        $this->reset('category', 'field', 'menu', 'peroperty', 'compelete', 'see', 'separator');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.formsaz.create');
    }
}
