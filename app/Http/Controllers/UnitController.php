<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    // function qui retourne la liste des unites
    public function index() {
        return view('Units.listunit');
    }
}
