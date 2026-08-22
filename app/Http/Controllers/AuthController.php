<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Untuk menampilkan halaman register
    public function register(){
        return view('register');
    }

    // proses register
    public function prosesregister(Request $r){
        // validasi dulu
        $r->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:3'
        ]);

        // membuat data user
        User::create([
            'name'  =>  $r->name,
            'email' =>  $r->email,
            'password'  =>  Hash::make($r->password)
        ]);

        return redirect()->route('login');
    }

    // menampilkan halaman login
    public function login(){
        return view('login');
    }

    // proses login
    public function proseslogin(Request $r){
        // validasi
        $data= $r->validate([
                'email'=>'required',
                'password'=>'required|min:3'
            ]);
        
        // mengecek apakah user ada di database?
        if(Auth::attempt($data)){
            // membuat session
            $r->session()->regenerate();

            // mengangarah ke route yg bisa di kelola
            return redirect()->route('divisi.index');
        }

        // jika gagal login
        return back()->withErrors(['email'=>'Email atau password Salah']);

    }

    // prose logout
    public function logout(Request $r){
        // fungsi untuk keluar
        Auth::logout();

        // menonaktifkan session kita
        $r->session()->invalidate();

        return redirect()->route('login');
    }

}
