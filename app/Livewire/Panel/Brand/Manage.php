<?php

namespace App\Livewire\Panel\Brand;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Manage extends Component
{

    use LivewireAlert;

    public $brand , $image;
    
    protected $rules = [
        'brand' => 'required',
        'image' => 'required|max:1024', // 1MB Max
    ];

    public function ConfirmEditProduct () {
        $this->validate();

        $this->alert('success', 'برند با موفقیت ویرایش شد');
    }

    public function ConfirmDelete () {
        $this->alert('success', 'برند با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmEditProduct',
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.brand.manage');
    }
}
