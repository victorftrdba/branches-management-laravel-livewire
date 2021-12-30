<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'cnpj',
        'state',
        'address',
        'phone',
        'employees',
    ];
}