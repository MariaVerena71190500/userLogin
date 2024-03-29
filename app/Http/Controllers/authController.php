<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkUserModel;



class authController extends Controller{
    public function __construct() {
        $this->user = new checkUserModel();
    }
  
    public function getLogin(){
        return view('admin.login');
    }

    public function postLogin(Request $request){

        $request->validate([
            'username' => 'required|alpha_dash',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember');

        if (auth()->attempt($credentials, $remember)) {
            $user = auth()->user();
            // dd($user);

            if ($user->role === 'admin') {
                return redirect()->route('index.admin')->with('success', 'Login Admin Berhasil');
            } 
            elseif ($user->role === 'user') {
                return redirect()->route('index.user')->with('success', 'Login Data User Berhasil');
            } 
            elseif ($user->role === 'anggota') {
                return redirect()->route('index.anggota')->with('success', 'Login Anggota Berhasil');
            }
        } 
        else {
            return redirect()->back()->with('error', 'Password atau Username Salah');
        }


    }

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogout')->with('success','You have been successfully logged out');
    }


   
}
