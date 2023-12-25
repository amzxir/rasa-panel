<?php

namespace App\Livewire\Panel\Slider;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Manage extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $link , $image_device_desktop , $image_device_mobile;

    protected $rules = [
        'link' => 'required|min:2',
        'image_device_desktop' => 'image|max:1024',
        'image_device_mobile' => 'image|max:1024',
    ];

    public function ConfirmEditSlider () {
        $this->validate();

        $this->alert('success', 'اسلایدر با موفقیت ویرایش شد');
        $this->reset('link' , 'image_device_desktop' , 'image_device_mobile');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'محصول با موفقیت حذف شد');
    }

    protected $listeners = [
        'Create',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.slider.manage');
    }
}
