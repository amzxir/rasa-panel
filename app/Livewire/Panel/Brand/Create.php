<?php

namespace App\Livewire\Panel\Brand;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;


class Create extends Component
{

    use LivewireAlert;

    use WithFileUploads;

    public $brand , $image;

    protected $rules = [
        'brand' => 'required|min:2',
        'image' => 'required|max:1024', // 1MB Max
    ];

    public function ConfirmCreateBrand (){

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
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.brand.create');
    }
}
