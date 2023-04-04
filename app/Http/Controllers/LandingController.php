<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('pages.landing.index');
    }
    public function category(){
        $category = Category::all();
        return view('pages.landing.category',compact('category'));
    }
    public function product(){
        $product = Product::all();
        return view('pages.landing.product',compact('product'));
    }
    public function cart(){
        $cart = Cart::all();
        return view('pages.landing.cart',compact('cart'));
    }
}
