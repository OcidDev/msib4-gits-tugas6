<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.index');
    }

    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect('login');

    }
}
