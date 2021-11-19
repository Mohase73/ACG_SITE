<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentreAppelController extends Controller
{
    public function index(){
        return view('pages.service.centre-appel');
    }
}
