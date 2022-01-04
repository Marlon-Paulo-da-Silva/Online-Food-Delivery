<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class FrontEndController extends Controller
{
    public function index(){

        $categories = Category::where('category_status', 1)->get();
        $products = Product::where('product_status', 1)->get();

        return view('FrontEnd.include.home', compact('categories','products'));
    }
}
