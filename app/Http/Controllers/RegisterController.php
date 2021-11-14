<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        $user = User::all();
        return view('admin.auth.register');
    }
    public function submitRegister(Request $request){
        $validated = $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:100',
            'confirm-password'=>'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = bcrypt($request->password);
        $user->password = $password;
        $user->save();

        return redirect()->back()->with(['success'=>'Registered Successfully']);
    }
    public function viewLogin(){
        return view('admin.auth.login');
    }
    public function submitLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:100',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back->with(['error'=>'Email or Password do not match']);
        }
            
        
        
    }
}
