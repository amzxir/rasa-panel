<?php

namespace App\Livewire\Panel\Discount;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Manage extends Component
{
    use LivewireAlert;

    public function ConfirmDelete () {
        $this->alert('success', 'کد تخفیف با موفقیت حذف شد');
    }

    protected $listeners = [
        'ConfirmDelete',
    ];

    public function render()
    {
        return view('livewire.panel.discount.manage');
    }
}
