<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index(){
        return view('mail.contact',[
            'title'=>'Liên hệ'
        ]);
    }
    public function submitContactForm(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );

        Mail::to('bhsangxd@gmail.com')->queue(new GuiEmail($data));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
