<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class walikelasController extends Controller
{
    public function index()
    {
        return view('walikelas.dashboard');
    }
}
