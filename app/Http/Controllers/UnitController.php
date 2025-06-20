<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    // function qui retourne la liste des unites
    public function index() {
        // recupere tous nos unites
        $units = Unit::all();
        // dd($units);
        return view('Units.listunit',compact('units'));
    }

    // function qui retourne le formulaire de creation d'une unite
    public function create() {
        return view('Units.createunit');
    }

    // fonction d'insertion en base de donner

    public function store(Request $request) {
        //validation cote backend des champs du formulaire
       $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //creation de l'unite

        // $unit = new Unit();
        // $unit->name = $request->name;
        // $unit->description = $request->description;
        // $unit->save();
        $unit = Unit::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        // dd( $unit);
        return redirect()->route('list.units');
    }

    public function edit($id) {
        // rechercher l'unite
        $unite = Unit::find($id);
        return view('Units.edit', compact('unite'));
    }

    //fonction pour la mise a jours
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //rechercher l'unite par son id
        $unit = Unit::find($id);
        $unit->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        //ou encore 
        // $unit->update();
        // $unit->name = $request->name;
        // $unit->description = $request->description;
        // $unit->save();

        //redirection vers la liste des unites
        return redirect()->route('list.units');
    }

    // fonction pour supprimer une unite
    public function destroy($id) {

        //rechercher l'unite par son id
        $unit = Unit::find($id);
        // dd($unit);
        //supprimer
        $unit->delete();

        return redirect()->route('list.units');
    }
}
