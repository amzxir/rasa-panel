<?php

namespace App\Livewire\Panel\Symbol;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Create extends Component
{
    use LivewireAlert;

    use WithFileUploads;

    public $name , $logo , $image , $mobile , $address , $phone , $email , $instagram , $telegram , $linkedin , $aparat , $youtube , $facebook , $whatsapp , $twitter , $slogan;

    protected $rules = [
        'name' => 'required|min:2',
        'image' => 'image|max:1024',
        'logo' => 'image|max:1024',
        'mobile' => 'required|numeric|digits:11',
        'address' => 'required|min:2',
        'phone' => 'required|numeric|digits:11',
        'email' => 'required|email',
        'instagram' => 'required|min:2',
        'telegram' => 'required|min:2',
        'linkedin' => 'required|min:2',
        'aparat' => 'required|min:2',
        'youtube' => 'required|min:2',
        'facebook' => 'required|min:2',
        'whatsapp' => 'required|min:2',
        'twitter' => 'required|min:2',
        'slogan' => 'required|min:2',

    ];

    public function ConfirmCreatePublic (){

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
        return view('livewire.panel.symbol.create');
    }
}
