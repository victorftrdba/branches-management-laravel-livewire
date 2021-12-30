<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Gym;

class Edit extends Component
{
    public $image, $name, $cnpj, $state, $address, $phone, $employees;

    public function render(Request $request)
    {
        $id = $request->id;

        $gym = Gym::findOrFail(intval($id));

        $this->name = $gym->name;
        $this->cnpj = $gym->cnpj;
        $this->state = $gym->state;
        $this->address = $gym->address;
        $this->phone = $gym->phone;
        $this->employees = $gym->employees;

        return view('livewire.branch.edit', [
            'gym' => $gym,
        ]);
    }

    public function update($idToUpdate)
    {
        $this->validate([
            'image' => 'required|max:2048',
            'name' => 'required|string',
            'cnpj' => 'required|string|unique:gyms',
            'state' => 'required|string',
            'address' => 'required',
            'phone' => 'required',
            'employees' => 'required',
        ]);

        $gym = Gym::findOrFail($idToUpdate);

        $gym->update([
            'image' => $this->image,
            'name' => $this->name,
            'cnpj' => $this->cnpj,
            'state' => $this->state,
            'address' => $this->address,
            'phone' => $this->phone,
            'employees' => $this->employees,
        ]);
    }
}