<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.index');
    }

    public function category(){
        return view('pages.dashboard.category.index');
    }

    public function category_edit($id){
        $category_edit = Category::findOrFail($id);
        return view('pages.dashboard.category.edit',compact('category_edit'));
    }

    public function product(){
        return view('pages.dashboard.product.index');
    }

    public function user(){
        return view('pages.dashboard.user.index');
    }

    public function logout(Request $request){
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
}
