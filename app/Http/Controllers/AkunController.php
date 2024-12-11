<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function formRegister()
    {
        $role = Roles::all();
        return view('admin.register', [
            'role' => $role
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $akun = Akun::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'id_r' => $request->role
        ]);

        if($request->role == 1){
            $akun->assignRole("Admin");
            return redirect()->route('admin.login')->with('success', 'Akun created successfully.');
        } else if($request->role == 2){
            $akun->assignRole("User");
            return redirect()->route('login')->with('success', 'Akun created successfully.');
        }
    }

    public function formLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error', 'Email or password is wrong.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function formRegisterUser()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required'
        ]);

        $akun = Akun::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'id_r' => 2
        ]);

        $akun->assignRole("User");
        return redirect()->route('login')->with('success', 'Akun created successfully.');
    }

    public function formLoginUser()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('wayang.display');
        }
        return redirect()->back()->with('error', 'Email or password is wrong.');
    }

    // // Fungsi untuk menampilkan username pengguna yang sedang login
    // public function getUsername()
    // {
    //     if (Auth::check()) {
    //         $username = Auth::user()->username; // Ambil username dari user yang login
    //         return response()->json(['username' => $username]);
    //     }
    //     return response()->json(['error' => 'User not authenticated'], 401);
    // }
}
