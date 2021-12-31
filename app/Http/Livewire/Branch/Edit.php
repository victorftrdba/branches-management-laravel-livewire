<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Models\Gym;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use WithFileUploads, LivewireAlert;

    public $gym, $image, $name, $cnpj, $state, $address, $phone, $employees;

    public function render(Request $request)
    {
        return view('livewire.branch.edit');
    }

    public function mount($gym)
    {
        $this->image = $gym->image;
        $this->name = $gym->name;
        $this->cnpj = $gym->cnpj;
        $this->state = $gym->state;
        $this->address = $gym->address;
        $this->phone = $gym->phone;
        $this->employees = $gym->employees;
    }

    public function update($id)
    {
        $this->validate([
            'image' => 'required|max:2048',
            'name' => 'required|string',
            'cnpj' => 'required|string',
            'state' => 'required|string',
            'address' => 'required',
            'phone' => 'required',
            'employees' => 'required',
        ]);

        $gym = Gym::findOrFail($id);

        $gym->update([
            'image' => $this->image,
            'name' => $this->name,
            'cnpj' => $this->cnpj,
            'state' => $this->state,
            'address' => $this->address,
            'phone' => $this->phone,
            'employees' => $this->employees,
        ]);

        return $this->alert('success', 'Filial atualizada com sucesso!', [
            'position' => 'center',
        ]);
    }
}