<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('Home.master');
// });
Route::get('/', [HomeController::class, 'index']);

//Routes pour gerer les unités
Route::get('/list-units', [UnitController::class, 'index'])->name('list.units');
