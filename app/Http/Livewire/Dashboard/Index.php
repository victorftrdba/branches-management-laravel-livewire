<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gym;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;

    public function render()
    {
        $gyms = Gym::orderBy('created_at', 'desc')->paginate(15);

        return view('livewire.dashboard.index', [
            'gyms' => $gyms,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function delete($id)
    {
        $gym = Gym::findOrFail($id);

        $gym->delete();

        return $this->alert('success', 'Filial excluída com sucesso!', [
            'position' => 'center',
        ]);
    }
}