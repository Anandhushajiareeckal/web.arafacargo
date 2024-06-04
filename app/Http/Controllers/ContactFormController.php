<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function contact(Request $request){
        if(isset($request)){


            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();

            return response()->json([
                'message' => 'success',
            ]);
        }
        else{
            return response()->json([
                'message' => 'fail',
            ]);
        }

    }
}
