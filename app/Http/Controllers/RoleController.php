<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RoleController extends Controller
{
    //liste des roles
    public function index() {
        $roles = Role::all();
        return view('Roles.list', compact('roles'));
    }

    //retourne le formulaire de creation d'un role
    public function create() {
        return view('Roles.create');
    }

    //fonction d'insertion en base de donner
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('list.roles');
    }
}
