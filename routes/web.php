<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;






// Route::get('/', function () {
//     return view('Home.master');
// });
Route::get('/', [HomeController::class, 'viewlogin'])->name('login');
Route::post('/', [UtilisateurController::class, 'login'])->name('login');
Route::get('/logout', [UtilisateurController::class, 'logout'])->name('logout')->middleware('auth:utilisateur');
Route::get('/create-utilisateurs', [UtilisateurController::class, 'create'] )->name('create.utilisateurs');
Route::post('/store-utilisateurs', [UtilisateurController::class, 'store'] )->name('store.utilisateurs');

Route::get('/index', [HomeController::class, 'index'])->name('index');

//Routes pour gerer les unités
Route::get('/list-units', [UnitController::class, 'index'])->name('list.units')->middleware('auth:utilisateur');
Route::get('/create-units', [UnitController::class, 'create'])->name('create.units');
Route::post('/store-units', [UnitController::class, 'store'])->name('store.units');
Route::get('/delete-units/{id}', [UnitController::class, 'destroy'])->name('delete.units');
Route::get('/edit-units/{id}', [UnitController::class, 'edit'])->name('edit.units');
Route::post('/update-units/{id}', [UnitController::class, 'update'])->name('update.units');

//Routes pour gerer les categories
Route::get('/list-categories', [CategoryController::class, 'index'] )->name('list.categories');
Route::get('/create-categories', [CategoryController::class, 'create'] )->name('create.categories');
Route::post('/store-categories', [CategoryController::class, 'store'] )->name('store.categories');

//Routes pour gerer les produits
Route::get('/list-produit', [ProductController::class, 'index'] )->name('list.produits');
Route::get('/create-produit', [ProductController::class, 'create'] )->name('create.produits');
Route::post('/store-produit', [ProductController::class, 'store'] )->name('store.produits');

//Routes pour gerer les roles
Route::get('/list-roles', [RoleController::class, 'index'] )->name('list.roles');
Route::get('/create-roles', [RoleController::class, 'create'] )->name('create.roles');
Route::post('/store-roles', [RoleController::class, 'store'] )->name('store.roles');
//Routes pour gerer les utilisateurs
Route::get('/list-utilisateurs', [UtilisateurController::class, 'index'] )->name('list.utilisateurs');



Route::get('/role-assign/{id}', [UtilisateurController::class, 'viewassign'] )->name('assign.roles');
Route::post('/role-assign/{id}', [UtilisateurController::class, 'rolesassign'] )->name('assign.roles.users');
Route::get('/verifie-Account/{token}', [HomeController::class, 'verifyAccount'] )->name('verifie.account');