<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        $products = Product::all()->where('status','1');

        $data = [
            'title' => 'Home'
        ];
      
        return view('frontend.pages.home.index', $data, compact('products'));
    }
}
