<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('Home.home');
    }

    // retourne la vue de la page d'accueil
    public function viewlogin() {
        return view('Auth.login');
    }

    // fonction de validation de compte
    public function verifyAccount($token) {
        
        $verifyuser = Utilisateur::where('token', $token)->first();
        // dd($verifyuser);
        if(!is_null($verifyuser)) {
            // si l'utilisateur existe et que le champs is_email_verified est 0
            if($verifyuser->is_email_verified == 0) {
               $verifyuser->is_email_verified = 1;
               $verifyuser->save();
            }
        }
        return redirect()->route('list.utilisateurs');
    }
}
