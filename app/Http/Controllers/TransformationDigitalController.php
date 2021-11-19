<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransformationDigital;
use Illuminate\Support\Str;

class TransformationDigitalController extends Controller
{
    public function index(){
        return view('pages.service.digital');
    }
    public function store(Request $request)
    {
        $data =   $request->validate([
            'name'                       => 'required', 'string',
            'phone'                    => 'required', 'number',
            'service'                       => 'required', 'string',
            'email'                     => 'required', 'string', 'email', 'max:255',
            'message'                   => 'required', 'string',
        ]);
        $digital = new TransformationDigital();
        $digital->uuid                   = Str::uuid();
        $digital->name                       = $request['name'];
        $digital->phone                    = $request['phone'];
        $digital->service                       = $request['service'];
        $digital->email                     = $request['email'];
        $digital->message                   = $request['message'];
        $digital->save();
         return back();
    }
}
