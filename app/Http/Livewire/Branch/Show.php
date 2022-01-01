<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;

class Show extends Component
{
    public $gym;

    public function render()
    {
        return view('livewire.branch.show');
    }
}