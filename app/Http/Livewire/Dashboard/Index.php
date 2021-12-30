<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gym;

class Index extends Component
{
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
}