<?php

namespace App\Livewire\Panel\Category;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert;

    use WithFileUploads;


    public $parent_category , $name , $image , $description;

    protected $rules = [
        'parent_category' => 'required|min:2',
        'name' => 'required|min:2',
        'description' => 'required|min:5',
        'image' => 'image|max:1024',
    ];

    public function ConfirmCreateCategory (){

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
        $this->reset('parent_category' , 'name' , 'description' , 'image');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.category.create');
    }
}
