<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.register.login');
    }

    public function login_proses(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if (!$user) {
            return back()->withErrors([
                'username' => 'Username tidak ditemukan'
            ]);
        }

        // Periksa apakah password belum di-hash
        if (strlen($user->password) < 60) { // Hash password biasanya 60 karakter
            $user->password = Hash::make($user->password);
            $user->save();
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard/' . Auth::user()->id);
            } else {
                return redirect('/pengajar/' . Auth::user()->id);
            }
        }

        return back()->withErrors([
            'password' => 'Password yang dimasukkan salah'
        ]);
    }


    public function logout(Request $request)
    {
        try {
            // Cek role user sebelum logout
            $role = Auth::user()->role;

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/login')->with('message', 'Berhasil logout');

        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}
