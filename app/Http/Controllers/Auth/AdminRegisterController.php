<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForm()
    {
        return view('auth.register-admin');
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nom'      => ['required', 'string', 'max:255'],
            'prenom'   => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();

        $user = User::create([
            'nom'      => $request->nom,
            'prenom'   => $request->prenom,
            'email'    => $request->email,
            'role_id'  => 1,
            'titre'    => 'Administrateur',
            'actif'    => true,
            'uuid'     => Str::uuid(),
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/admin');
    }
}
