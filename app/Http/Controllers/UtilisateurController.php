<?php

namespace App\Http\Controllers;

use Stringable;
use App\Models\Role;
use App\Mail\VerifyMail;
use App\Models\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Container\Attributes\Auth;

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
            'email' => 'required',
            'password' => 'required',
        ]);
        $token = Str::random(10);
        $messag = "Bienvenue dans notre application, veuillez verifier votre email pour activer votre compte";
        //creation de l'utilisateur
        $utilisateur = Utilisateur::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'sexe' => $request->sexe,
            'image' => $request->image,
            'email' => $request->email,
            'password' => bcrypt($request->password),// Hashing the password
            'token' => $token 
        ]);
        //envoi de l'email de verification
        Mail::to($utilisateur->email)->send( new VerifyMail($utilisateur,$messag));

        return redirect()->route('login');
    }

    // function to login a user
    public function login(LoginFormRequest $request){
        //dd($request->all());
        // login logic here
        $credentials = $request->only('email', 'password');
        // dd('Credentials:');
        // dd($credentials);
        // dd(auth('utilisateur')->attempt($credentials));
        if (auth('utilisateur')->attempt($credentials)) {
            // return redirect()->route('dashboard');
            // dd('Login successful');
            // Redirect to the intended page or dashboard
            $request->session()->regenerate();
            return redirect()->intended('/list-utilisateurs');
        } else {
            // return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
            dd('Login failed');
        }
    }
    // logout function
    public function logout(Request $request) {
        // dd($request);
        auth('utilisateur')->logout();
        return redirect()->route('login');
    }
    public function viewassign($id) {
        // recuperer l'utilisateur
        $utilisateur = Utilisateur::find($id);
        //recuperer les roles
        $roles = Role::all();

        return view('Roles.rolesAsign', compact('utilisateur', 'roles'));
    }

    //fonction d'assignation des roles a un utilisateur
    public function rolesassign(Request $request, $id) {
        // recherche de l'utilisateur par son id
        $utilisateur = Utilisateur::find($id);

        //recuper l'utilisateur et lui assigner des roles
        $utilisateur->roles()->attach($request->role_id);

        // pour retirer un roles a un utilisateur
        // $utilisateur->roles()->detach($request->role_id);

        // pour mettre a jour les roles d'un utilisateur
        // $utilisateur->roles()->sync($request->role_id);

        // ajouter un role sans supprimer les anciens roles
        // $utilisateur->roles()->syncWithoutDetaching($request->role_id);

        // redirection vers la liste des utilisateurs
        return redirect()->route('list.utilisateurs');

        //is_email_verified
    }
}
