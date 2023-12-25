<?php

namespace App\Livewire\Panel\Promotion;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use LivewireAlert , WithFileUploads;

    public $link , $placement , $image;

    protected $rules = [
        'link' => 'required',
        'placement' => 'required',
        'image' => 'image|max:1024',
    ];

    public function ConfirmEditPromotion () {

        $this->alert('success', 'پروموشن با موفقیت ویرایش شد');
        $this->reset('link' , 'placement' , 'image');
    }



    public function ConfirmDelete () {
        $this->alert('success', 'پروموشن با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmEditPromotion',
        'ConfirmDelete',
    ];

    public function render()
    {
        return view('livewire.panel.promotion.manage');
    }
}
