<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Define the fillable fields if you're using mass assignment
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'education',
        'experience',
        'skills',
        'interests',
    ];
}
