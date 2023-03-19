<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function createAccount(Request $request)
    {
        DB::table('users')->insert([
            'name'=>$request->nom_complet,
            'password'=>$request->email,
            'email'=>$request->mot_de_passe,
        ]);
        return response('Votre compte a bien été crée');
    }
}
