<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(){
        $products = Product::orderBy("created_at","desc")->paginate(12);
        return view("user.pages.home",compact("products"));
    }


    public function carSingle(){
        return view("user.pages.car-single");
    }
}
