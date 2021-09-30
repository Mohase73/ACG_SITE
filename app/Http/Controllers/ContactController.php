<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
// use Mail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request){
        return view('pages.a-propos.contact');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'subject',
            'message' => 'required'
         ]);
        Contact::create($request->all());
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ),
        function($message) use ($request){
            $message->from($request->email);
            $message->to('alainguigma99@gmail.com', 'Admin')->subject($request->get('nama'));
        });
        return view('pages.a-propos.contact')->with('success', 'Nous avons reçu votre mail nous vous reviendrons sous peu.');
    }

}
