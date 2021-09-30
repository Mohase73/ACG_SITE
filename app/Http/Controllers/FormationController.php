<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formation;
use Illuminate\Support\Str;


class FormationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $formations = Formation::all();
        return view('pages.service.formation', compact('formations'));
    }
    public function store(Request $request)
    {
        $data =   $request->validate([
            'name'                       => 'required', 'string',
            'phone'                    => 'required', 'number',
            'reservation'                    => 'boolean',
            'module'                       => 'required', 'string',
            'formation'                       => 'required', 'string',
            'email'                     => 'required', 'string', 'email', 'max:255',
            'suggestion'                   => 'required', 'string',
        ]);
        $formation = new Formation();
        $formation->uuid                   = Str::uuid();
        $formation->name                       = $request['name'];
        $formation->phone                    = $request['phone'];
        $formation->reservation                       = $request['reservation'];
        $formation->module                       = $request['module'];
        $formation->formation                       = $request['formation'];
        $formation->email                     = $request['email'];
        $formation->suggestion                   = $request['suggestion'];
        $formation->save();
         return back();
    }
}
