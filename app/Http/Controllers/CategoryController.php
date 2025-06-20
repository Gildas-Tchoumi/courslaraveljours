<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //liste categories
    public function index() {
        //recuperer les categories
        $cat = Category::all();
        return view('Categories.list', compact('cat'));
    }

    //retourne le formulaire de creation d'une categorie
    public function create() {
        return view('Categories.create');
    }

    //fonction d'insertion en base de donner
    public function store(Request $request) {
        //validation cote backend des champs du formulaire
        $request->validate([
            'name' => 'required',
            'note' => 'required',
        ]);

        //creation de la categorie
        Category::create([
            'name' => $request->name,
            'note' => $request->note,
        ]);

        return redirect()->route('list.categories');
    }
}
