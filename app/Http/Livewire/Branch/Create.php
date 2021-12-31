<?php

namespace App\Http\Livewire\Branch;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Gym;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use WithFileUploads, LivewireAlert;

    public $image, $name, $cnpj, $state, $address, $phone, $employees;

    public function render()
    {
        return view('livewire.branch.create');
    }

    public function store()
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

        Gym::create([
            'image' => $this->image->store('pictures'),
            'name' => $this->name,
            'cnpj' => $this->cnpj,
            'state' => $this->state,
            'address' => $this->address,
            'phone' => $this->phone,
            'employees' => $this->employees,
        ]);

        $this->alert('success', 'Filial atualizada com sucesso!', [
            'position' => 'center',
        ]);

        sleep(5);

        return redirect('/');
    }
}