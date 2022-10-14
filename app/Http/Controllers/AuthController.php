<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function actionRegister(Request $request){
        if($request->password == $request->confirm_password){
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            session()->flash('success', 'Berhasil Membuat Akun!');
            
            return redirect('/register');

        } else{
                session()->flash('error', 'Konfirmasi password anda berbeda!');
            
                return redirect('/register');
            }
        }
    
    public function loginView(){
        if(Auth::check()){
            return redirect('/');
        } else{
            return view('login');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            session()->flash('error', 'Email atau Password Salah');
        
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        session()->flash('success', 'Berhasil Logout');
        return redirect('/login');
    }
}
