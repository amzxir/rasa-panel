<?php

namespace App\Livewire\Panel\Slider;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $link , $image_device_desktop , $image_device_mobile;

    protected $rules = [
        'link' => 'required|min:2',
        'image_device_desktop' => 'image|max:1024',
        'image_device_mobile' => 'image|max:1024',
    ];

    public function ConfirmCreateSlider (){

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
        $this->reset('link' , 'image_device_desktop' , 'image_device_mobile');
    }

    protected $listeners = [
        'Create'
    ];

    public function render()
    {
        return view('livewire.panel.slider.create');
    }
}
