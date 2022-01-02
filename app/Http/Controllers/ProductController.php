<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    public function index (){

        $categories = Category::where('category_status', 1)->get();

        return view('Backend.product.add', compact('categories') );
    }
    
    public function product_save (Request $request){
        $product = new Product();

        // $imgName = $request->file('product_image');
        // $image = $imgName->getClientOriginalName();
        // $directory = 'BackEndSourceFile/product_img/';
        // $imgUrl = $directory.$image;
        // $imgName->move($directory.$image);

        // Image upload

        
        
        
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_detail = $request->product_detail;
        $product->product_status = $request->product_status;
        
        if($request->hasFile('product_image') && $request->file('product_image')->isValid()){
            $requestImage = $request->product_image;

            $extension = $requestImage->getClientOriginalExtension();


            $imageName =  md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;

            $requestImage->move(public_path('BackEndSourceFile/product_img'), $imageName);

            $product->product_image = $imageName;
        }else {
            $product->product_image = "product-no-image.jpg";
        }

        $product->save();
        
        return back()->with('sms', 'Produto Salvo');
    }
    
    public function product_manage (){

        $categories = Category::where('category_status', 1)->get();



        $products = DB::table('products')
            ->join('categories','products.category_id','=','categories.category_id')
            ->select('products.*','categories.category_name')
            ->get();

        return view('Backend.product.manage', compact('products','categories'));
    }
    
    public function product_delete ($product_id){

        $products = Product::find($product_id);

        $products->delete();

        return back()->with('sms', 'Produto deletado');
    }

    public function product_inactive ($product_id){

        $products = Product::find($product_id);

        $products->product_status = 0;
        
        $products->save();

        return back();
    }

    public function product_active ($product_id){

        $products = Product::find($product_id);

        $products->product_status = 1;
        
        $products->save();

        return back();
    }

    public function product_update (Request $request){

        $product = Product::find($request->product_id);

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_detail = $request->product_detail;
        $product->product_status = $request->product_status;
        
        if($request->hasFile('product_image') && $request->file('product_image')->isValid()){
            $requestImage = $request->product_image;

            $extension = $requestImage->getClientOriginalExtension();


            $imageName =  md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;

            $requestImage->move(public_path('BackEndSourceFile/product_img'), $imageName);

            $product->product_image = $imageName;
        } 

        $product->save();

        return redirect('/products/manage')->with('sms', 'Cadastro do produto atualizado');
    }
}
