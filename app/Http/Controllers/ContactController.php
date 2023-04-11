<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $request){
        $details = [
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'message' => $request->message
        ];
        
        Mail::to('snow78018@gmail.com')->send(new ContactMail($details));
        
        return back()->with('message_sent','message has been sent successfully');
        // return "gggggggggg";
    }
}
