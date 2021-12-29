<?php

namespace App\Http\Controllers;
use App\Http\Controllers\console;

use Illuminate\Http\Request;

use App\Models\Category;





class CategoryController extends Controller
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

        return view('Backend.category.manageCategory', compact('categories'));
    }
    
    public function active($category_id){
        $category = Category::find($category_id);

        $category->category_status = 1;
        $category->save();


        return back();
    }
    public function inactive($category_id){
        $category = Category::find($category_id);

        $category->category_status = 0;
        $category->save();


        return back();
    }
    public function delete($category_id){
        $category = Category::find($category_id);

        $category->delete();


        return back();
    }
    public function update(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;

    
        $category->save();

        return redirect('/category/manage')->with('sms', 'Alterado com sucesso');
     }
}
