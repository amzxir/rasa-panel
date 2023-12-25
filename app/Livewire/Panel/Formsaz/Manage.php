<?php

namespace App\Livewire\Panel\Formsaz;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Manage extends Component
{
    use LivewireAlert;

    public $category , $attribute , $search , $field , $menu , $peroperty , $compelete;

    public function ConfirmEditFormsaz () {
        $this->validate([
            'field' => 'required|min:2',
            'menu' => 'required',
            'peroperty' => 'required',
            'compelete' => 'required',
        ]);

        $this->alert('success', 'فیلد با موفقیت ویرایش شد');
        $this->reset('field' ,'menu' ,'peroperty' ,'compelete');
    }


    public function ConfirmAttributeValue () {
        $this->validate([
            'attribute' => 'required',
        ]);

        $this->alert('success', 'پیش فرض با موفقیت اضافه شد');
        $this->reset('attribute');
    }

    public function ConfirmEditCategoryFormsaz () {
        $this->validate([
            'category' => 'required|min:2',
        ]);
        $this->alert('success', 'دسته بندی فرمساز با موفقیت ویرایش شد');
        $this->reset('category');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'فیلد با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmFilter',
        'ConfirmAttributeValue',
        'ConfirmEditCategoryFormsaz',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.formsaz.manage');
    }
}
