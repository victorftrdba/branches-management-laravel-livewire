<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gym;

class BranchController extends Controller
{
    public function create()
    {
        return view('branch.create');
    }

    public function show($id)
    {
        return view('branch.show');
    }
}