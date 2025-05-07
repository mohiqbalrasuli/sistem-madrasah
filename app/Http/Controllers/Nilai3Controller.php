<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class Nilai3Controller extends Controller
{
    public function index()
    {
        return view('datanilai.kelas3');
    }
}
