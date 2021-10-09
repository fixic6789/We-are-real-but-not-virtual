<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
//use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view ('forms');
    }
    public function sendEmail(Request $request)
    {

        $details =
        [
            'name' => $request-> name,
            'text' => $request-> text
        ];

        Mail::to('soboli1989@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent','You message has been sent successfully!');
    }
}
