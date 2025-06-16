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
Route::get('/create-units', [UnitController::class, 'create'])->name('create.units');
Route::post('/store-units', [UnitController::class, 'store'])->name('store.units');
Route::get('/delete-units/{id}', [UnitController::class, 'destroy'])->name('delete.units');
Route::get('/edit-units/{id}', [UnitController::class, 'edit'])->name('edit.units');
