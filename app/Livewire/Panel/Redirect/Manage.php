<?php

namespace App\Livewire\Panel\Redirect;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Manage extends Component
{
    use LivewireAlert;

    public function ConfirmDelete () {
        $this->alert('success', 'ادرس با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmDelete',
    ];

    public function render()
    {
        return view('livewire.panel.redirect.manage');
    }
}
