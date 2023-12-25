<?php

namespace App\Livewire\Panel\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;


use Livewire\Component;

class Manage extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $redirect , $banner , $display , $parent_category , $name , $image , $description;

    public function ConfirmEditCategory () {
        $this->validate([
            'parent_category' => 'required|min:2',
            'image' => 'image|max:1028',
            'name' => 'required|min:2',
            'description' => 'required|min:5',
        ]);

        $this->alert('success', 'دسته بندی با موفقیت ویرایش شد');
        $this->reset('parent_category' , 'image' , 'name' , 'description');
    }


    public function ConfirmEditBanner () {
        $this->validate([
            'redirect' => 'required',
            'banner' => 'image|max:1028',
        ]);

        $this->alert('success', 'بنر دسته بندی با موفقیت انجام شد');
        $this->reset('banner' , 'redirect');
    }

    public function ConfirmDisplaySearch () {
        $this->validate([
            'display' => 'required',
        ]);
        $this->alert('success', 'ترتیب نمایش با موفقیت ثبت شد');
        $this->reset('display');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'دستخ بندی با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmFilter',
        'ConfirmProductOk',
        'ConfirmProductNotOk',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.category.manage');
    }
}
