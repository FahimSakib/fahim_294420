<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleController extends Controller
{ public function index($id){

    $product = Product::where('id', $id)->find($id);
    
    $data = [
        'title' => 'Home'
    ];
  
    return view('frontend.pages.single-product.single', $data, compact('product'));
}
}
