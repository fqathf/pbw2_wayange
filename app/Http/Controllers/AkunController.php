<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function formRegister()
    {   $role = Roles::all();
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
            return redirect()->route('wayang.index');
        }
        return redirect()->back()->with('error', 'Email or password is wrong.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
