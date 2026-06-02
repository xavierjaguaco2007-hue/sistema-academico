<?php

namespace App\Http\Controllers;

class DocenteController extends Controller
{
    public function dashboard()
    {
        return view('docente.dashboard');
    }
}