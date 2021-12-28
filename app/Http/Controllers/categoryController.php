<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('Backend.category.addCategory');
    }
    public function save(Request $request){

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->category_status = $request->category_status;
        $category->added_on = $request->added_on;
        $category->save();

        return back()->with('sms', 'Categoria Salva');
    }

    public function manage(){
        $categories = Category::all();

        return view('Backend.category.manageCategory', [compact('categories')]);
    }
}
