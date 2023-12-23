<?php

namespace App\Livewire\Panel\Product;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;



class Create extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $category , $name_fa , $name_en , $unit , $value , $brand , $content , $seo , $image , $catalog , $video , $warranty;

    protected $rules = [
        'category' => 'required|min:2',
        'name_fa' => 'required|min:2',
        'name_en' => 'required|min:2',
        'unit' => 'required|numeric',
        'value' => 'required|numeric',
        'brand' => 'required',
        'content' => 'required|min:5',
        'seo' => 'required|min:5',
        'image' => 'required|max:1024', // 1MB Max
        'catalog' => 'required',
        'video' => 'required',
        'warranty' => 'required',
    ];

    public function ConfirmCreateProduct (){

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
        return view('livewire.panel.product.create');
    }
}
