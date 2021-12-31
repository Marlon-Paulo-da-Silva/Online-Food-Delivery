<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coupon;

class CouponsController extends Controller
{
    public function index (){
        return view('Backend.coupon.add');
    }
    
    public function coupon_save (Request $request){

        $coupon = new Coupon();

        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->cart_min_value = $request->cart_min_value;
        $coupon->expired_on = $request->expired_on;
        $coupon->coupon_status = $request->coupon_status;
        $coupon->added_on = $request->added_on;
        
        $coupon->save();

        return back()->with('sms', 'Cupom Salvo');
    }
    
    public function coupon_manage (){

        $coupon = Coupon::all();

        return view('Backend.coupon.manage', compact('coupon'));
    }
    
    public function coupon_delete ($coupon_id){

        $coupon = Coupon::find($coupon_id);

        $coupon->delete();

        return back()->with('sms', 'Cupom deletado');
    }

    public function coupon_inactive ($coupon_id){

        $coupon = Coupon::find($coupon_id);

        $coupon->coupon_status = 0;
        
        $coupon->save();

        return back();
    }

    public function coupon_active ($coupon_id){

        $coupon = Coupon::find($coupon_id);

        $coupon->coupon_status = 1;
        
        $coupon->save();

        return back();
    }

    public function coupon_update (Request $request){

        $coupon = Coupon::find($request->coupon_id);

        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->cart_min_value = $request->cart_min_value;
        $coupon->expired_on = $request->expired_on;
        
        $coupon->save();

        return redirect('/coupons/manage')->with('sms', 'Cupom atualizado');
    }
}
