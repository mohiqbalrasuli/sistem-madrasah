<?php

namespace App\Http\Controllers;

use App\Models\FanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $jadwalguru=FanModel::with(['kelas'])
                    ->where('guru_id',Auth::User()->id)
                    ->get();

        return view('halamanpengajar.dashboard',compact('jadwalguru'));
    }
}
