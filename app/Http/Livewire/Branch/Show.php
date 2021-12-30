<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Gym;

class Show extends Component
{
    public function render(Request $request)
    {
        $id = $request->id;

        $gym = Gym::findOrFail($id);

        return view('livewire.branch.show', [
            'gym' => $gym,
        ]);
    }
}