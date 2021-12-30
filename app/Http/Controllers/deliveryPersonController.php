<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery_person;

class deliveryPersonController extends Controller
{
    public function index (){
        return view('Backend.deliveryPerson.addDeliveryPerson');
    }
    
    public function deliveryperson_save (Request $request){

        $deliveryperson = new Delivery_person();

        $deliveryperson->delivery_person_name = $request->delivery_person_name;
        $deliveryperson->delivery_person_phone_number = $request->delivery_person_phone_number;
        $deliveryperson->delivery_person_password = $request->delivery_person_password;
        $deliveryperson->delivery_person_status = $request->delivery_person_status;
        $deliveryperson->added_on = $request->added_on;
        $deliveryperson->save();

        return back()->with('sms', 'Entregador Salvo');
    }
    
    public function deliveryperson_manage (){

        $deliveryperson = Delivery_person::all();

        return view('Backend.deliveryPerson.manageDeliveryPerson', compact('deliveryperson'));
    }
    
    public function deliveryperson_delete ($deliveryperson_id){

        $deliveryperson = Delivery_person::find($deliveryperson_id);

        $deliveryperson->delete();

        return back()->with('sms', 'Cadastro do entregador deletado');
    }

    public function dp_inactive ($deliveryperson_id){

        $deliveryperson = Delivery_person::find($deliveryperson_id);

        $deliveryperson->delivery_person_status = 0;
        
        $deliveryperson->save();

        return back();
    }

    public function dp_active ($deliveryperson_id){

        $deliveryperson = Delivery_person::find($deliveryperson_id);

        $deliveryperson->delivery_person_status = 1;
        
        $deliveryperson->save();

        return back();
    }


}
