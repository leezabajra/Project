<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login.view');
    }
}
