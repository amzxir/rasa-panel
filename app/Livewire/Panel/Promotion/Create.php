<?php

namespace App\Livewire\Panel\Promotion;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $link , $placement , $image;

    protected $rules = [
        'link' => 'required',
        'placement' => 'required',
        'image' => 'image|max:1024',
    ];

    public function ConfirmCreatePromotion (){

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
        $this->reset('link' , 'placement' , 'image');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.promotion.create');
    }
}
