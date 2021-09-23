<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formation;


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
}
