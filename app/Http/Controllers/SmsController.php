<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

use Exception;
class SmsController extends Controller
{
    //

    public  function sendMessage(){
        
    }

    public function storePhoneNumber(Request $request)
{
    // //run validation on data sent in
    // $validatedData = $request->validate([
    //     'phone_number' => 'required|unique:users_phone_number|numeric'
    // ]);
    // $user_phone_number_model = new UsersPhoneNumber($request->all());
    // $user_phone_number_model->save();
    // return back()->with(['success'=>"{$request->phone_number} registered"]);
}

    
}
