<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MemoireController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\SoutenanceController;
use App\Http\Controllers\Type_projetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::post('admin', [AdminController::class, 'authenticate'])->name('admin');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout'); 
Route::get('admin/profile_user', [AdminController::class, 'profile'])->name('admin.profile_user');

Route::get('/admin/etudiant',[EtudiantController::class, 'index'])->name('admin/etudiant.index');
Route::get('/admin/etudiant/search',[EtudiantController::class, 'search']);
Route::get('/admin/etudiant/create',[EtudiantController::class, 'create'])->name('admin/etudiant.create');
Route::get('/admin/etudiant/{id}', [EtudiantController::class, 'show'])->name('admin/etudiant.show');
Route::get('/admin/etudiant/{id}/edit', [EtudiantController::class, 'edit'])->name('admin/etudiant.edit');
Route::post('/admin/etudiant', [EtudiantController::class, 'store'])->name('admin/etudiant.store');
Route::put('/admin/etudiant/{id}', [EtudiantController::class, 'update'])->name('admin/etudiant.update');
Route::delete('/admin/etudiant/{id}', [EtudiantController::class, 'destroy'])->name('admin/etudiant.destroy');

Route::get('/admin/filiere', [FiliereController::class, 'index'])->name('admin/filiere.index');
Route::get('/admin/filiere/create',[FiliereController::class, 'create'])->name('admin/filiere.create');
Route::get('/admin/filiere/{id}', [FiliereController::class, 'show'])->name('admin/filiere.show');
Route::get('/admin/filiere/{id}/edit', [FiliereController::class, 'edit'])->name('admin/filiere.edit');
Route::post('/admin/filiere', [FiliereController::class, 'store'])->name('admin/filiere.store');
Route::put('/admin/filiere/{id}', [FiliereController::class, 'update'])->name('admin/filiere.update');
Route::delete('/admin/filiere/{id}', [FiliereController::class, 'destroy'])->name('admin/filiere.destroy');

Route::get('/admin/personnel', [PersonnelController::class, 'index'])->name('admin/personnel.index');
Route::get('/admin/personnel/create',[PersonnelController::class, 'create'])->name('admin/personnel.create');
Route::get('/admin/personnel/{id}', [PersonnelController::class, 'show'])->name('admin/personnel.show');
Route::get('/admin/personnel/{id}/edit', [PersonnelController::class, 'edit'])->name('admin/personnel.edit');
Route::post('/admin/personnel', [PersonnelController::class, 'store'])->name('admin/personnel.store');
Route::put('/admin/personnel/{id}', [PersonnelController::class, 'update'])->name('admin/personnel.update');
Route::delete('/admin/personnel/{id}', [PersonnelController::class, 'destroy'])->name('admin/personnel.destroy');

Route::get('/admin/parcours', [ParcoursController::class, 'index'])->name('admin/parcours.index');
Route::get('/admin/parcours/create',[ParcoursController::class, 'create'])->name('admin/parcours.create');
Route::get('/admin/parcours/{id}', [ParcoursController::class, 'show'])->name('admin/parcours.show');
Route::get('/admin/parcours/{id}/edit', [ParcoursController::class, 'edit'])->name('admin/parcours.edit');
Route::post('/admin/parcours', [ParcoursController::class, 'store'])->name('admin/parcours.store');
Route::put('/admin/parcours/{id}', [ParcoursController::class, 'update'])->name('admin/parcours.update');
Route::delete('/admin/parcours/{id}', [ParcoursController::class, 'destroy'])->name('admin/parcours.destroy');


Route::get('/admin/memoire', [MemoireController::class, 'index'])->name('admin/memoire.index');
Route::get('/admin/memoire/create', [MemoireController::class, 'create'])->name('admin/memoire.create');
Route::get('/admin/memoire/{id}', [MemoireController::class, 'show'])->name('admin/memoire.show');
Route::get('/admin/memoire/{id}/edit', [MemoireController::class, 'edit'])->name('admin/memoire.edit');
Route::post('/admin/memoire', [MemoireController::class, 'store'])->name('admin/memoire.store');
Route::put('/admin/memoire/{id}', [MemoireController::class, 'update'])->name('admin/memoire.update');
Route::delete('/admin/memoire/{id}', [MemoireController::class, 'destroy'])->name('admin/memoire.destroy');

Route::get('/admin/type_projet', [Type_projetController::class, 'index'])->name('admin/type_projet.index');
Route::get('/admin/type_projet/create', [Type_projetController::class, 'create'])->name('admin/type_projet.create');
Route::get('/admin/type_projet/{id}', [Type_projetController::class, 'show'])->name('admin/type_projet.show');
Route::get('/admin/type_projet/{id}/edit', [Type_projetController::class, 'edit'])->name('admin/type_projet.edit');
Route::post('/admin/type_projet', [Type_projetController::class, 'store'])->name('admin/type_projet.store');
Route::put('/admin/type_projet/{id}', [Type_projetController::class, 'update'])->name('admin/type_projet.update');
Route::delete('/admin/type_projet/{id}', [Type_projetController::class, 'destroy'])->name('admin/type_projet.destroy');


Route::get('/admin/projet', [ProjetController::class, 'index'])->name('admin/projet.index');
Route::get('/admin/projet/create', [ProjetController::class, 'create'])->name('admin/projet.create');
Route::get('/admin/projet/{id}', [ProjetController::class, 'show'])->name('admin/projet.show');
Route::get('/admin/projet/{id}/edit', [ProjetController::class, 'edit'])->name('admin/projet.edit');
Route::post('/admin/projet', [ProjetController::class, 'store'])->name('admin/projet.store');
Route::put('/admin/projet/{id}', [ProjetController::class, 'update'])->name('admin/projet.update');
Route::delete('/admin/projet/{id}', [ProjetController::class, 'destroy'])->name('admin/projet.destroy');


Route::get('/admin/soutenance', [SoutenanceController::class, 'index'])->name('admin/soutenance.index');
Route::get('/admin/soutenance/create', [SoutenanceController::class, 'create'])->name('admin/soutenance.create');
Route::get('/admin/soutenance/{id}', [SoutenanceController::class, 'show'])->name('admin/soutenance.show');
Route::get('/admin/soutenance/{id}/edit', [SoutenanceController::class, 'edit'])->name('admin/soutenance.edit');
Route::post('/admin/soutenance', [SoutenanceController::class, 'store'])->name('admin/soutenance.store');
Route::put('/admin/soutenance/{id}', [SoutenanceController::class, 'update'])->name('admin/soutenance.update');
Route::delete('/admin/soutenance/{id}', [SoutenanceController::class, 'destroy'])->name('admin/soutenance.destroy');
