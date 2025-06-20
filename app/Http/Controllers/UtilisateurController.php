<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //liste des utilisateurs
    public function index() {
        $utilisateurs = Utilisateur::all();
        return view('Utilisateurs.liste', compact('utilisateurs'));
    }

    public function create() {
        return view('Utilisateurs.create');
    }

    //fonction d'insertion en base de donner
    public function store(Request $request) {
        //validation
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'sexe' => 'required',
            'image' => 'required',
            'email' => 'required|email|unique:utilisateurs,email',
            'password' => 'required',
        ]);
        //creation de l'utilisateur
        $utilisateur = Utilisateur::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'sexe' => $request->sexe,
            'image' => $request->image,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hashing the password
        ]);

        return redirect()->route('list.utilisateurs');
    }

    public function viewassign($id) {
        // recuperer l'utilisateur
        $utilisateur = Utilisateur::find($id);
        //recuperer les roles
        $roles = Role::all();

        return view('Roles.rolesAsign', compact('utilisateur', 'roles'));
    }
}
