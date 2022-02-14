<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleController extends Controller
{ public function index(){

       

    $data = [
        'title' => 'Home'
    ];
  
    return view('frontend.pages.single-product.single', $data);
}
}
