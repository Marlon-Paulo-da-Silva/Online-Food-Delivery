<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index (){

        $categories = Category::where('category_status', 1)->get();

        return view('Backend.product.add', compact('categories') );
    }
    
    public function product_save (Request $request){

        $imgName = $request->file('product_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'BackEndSourceFile/product_img';
        $imgUrl = $directory.$image;
        $imgName->move($directory.$image);


        $product = new Product();

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->product_detail = $request->product_detail;
        $product->product_image = $imgUrl;
        $product->product_status = $request->product_status;
        
        $product->save();

        return back()->with('sms', 'Produto Salvo');
    }
    
    public function product_manage (){

        $deliveryperson = Product::all();

        return view('Backend.product.manage', compact('deliveryperson'));
    }
    
    public function product_delete ($deliveryperson_id){

        $deliveryperson = Product::find($deliveryperson_id);

        $deliveryperson->delete();

        return back()->with('sms', 'Cadastro do entregador deletado');
    }

    public function product_inactive ($deliveryperson_id){

        $deliveryperson = Product::find($deliveryperson_id);

        $deliveryperson->delivery_person_status = 0;
        
        $deliveryperson->save();

        return back();
    }

    public function product_active ($deliveryperson_id){

        $deliveryperson = Product::find($deliveryperson_id);

        $deliveryperson->delivery_person_status = 1;
        
        $deliveryperson->save();

        return back();
    }

    public function product_update (Request $request){

        $deliveryperson = Product::find($request->delivery_person_id);

        $deliveryperson->delivery_person_name = $request->delivery_person_name;
        
        $deliveryperson->delivery_person_phone_number = $request->delivery_person_phone_number;
        
        $deliveryperson->save();

        return redirect('/products/manage')->with('sms', 'Cadastro do produto atualizado');
    }
}
