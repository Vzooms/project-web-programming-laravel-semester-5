<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function toRegister(){
        return view('register');
    }

    public function toLogin(){
        return view('login');
    }

    public function toEditProfile(){
        return view('profile.profile-edit',[
            'user' => User::where('id', auth()->user()->id)->first()
        ]);
    }

    public function register(Request $req){
        $req->validate([
            'username' => 'required',
            'email' =>'required|email',
            'dateOfBirth' => 'required|before:today',
            'gender' =>'required',
            'password' =>'required',
            'confirmPassword' => 'required|same:password',
        ]);

        User::insert([
            'username' => $req->username,
            'email' => $req->email,
            'dateOfBirth' => $req->dateOfBirth,
            'gender' => $req->gender,
            'password' => bcrypt($req->password),
        ]);

        return redirect('/login');
    }

    public function username(){
        return 'username';
    }

    public function login(Request $req){
        $credentials = $req->validate([
            $this->username() => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function editUser(Request $req){
        $req->validate([
            'username' => 'required',
            'email' =>'required|email',
            'dateOfBirth' => 'required|before:today',
            'gender' =>'required',
            'password' =>'required',
        ]);

        User::where('id', auth()->user()->id)->update([
            'username' => $req->username,
            'email' => $req->email,
            'dateOfBirth' => $req->dateOfBirth,
            'gender' => $req->gender,
            'password' => bcrypt($req->password),
        ]);

        // lom tau mau kmna, jadi smntara ke home dlu
        return redirect('/');
    }

    public function deleteUser(Request $req){
        User::where('id', auth()->user()->id)->delete();
        return redirect('/register');
    }


}
