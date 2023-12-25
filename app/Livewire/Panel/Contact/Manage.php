<?php

namespace App\Livewire\Panel\Contact;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Manage extends Component
{
    use LivewireAlert;

    
    public function ConfirmDelete () {
        $this->alert('success', 'تماس با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmDelete',

    ];

    public function render()
    {
        return view('livewire.panel.contact.manage');
    }
}
