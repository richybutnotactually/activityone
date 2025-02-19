<?php

namespace App\Http\Controllers;
use App\Models\User;

abstract class Controller
{
    public function index()
    {
        $student = User::all();
        return view('studentView', compact('student'));
    }
}
