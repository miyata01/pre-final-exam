<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function show()
    {
        return view('resume.show'); // Ensure this matches your view path
    }
}
