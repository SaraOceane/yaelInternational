<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/mon_espace', function () {
    return view('dashboard_client');
})->name('dashboard_client');

Route::get('/mes_pieces', function () {
    return view('pieces');
})->name('pieces');

Route::get('/documents', function () {
    return view('documents');
})->name('documents');

Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::post('/pieces/upload','PieceController@upload');

Route::get('/traitement_formes_juridiques', 'FormesJuridiquesController@traiterFormulaire')->name('traitement_formes_juridiques');
Route::get('/formes_juridiques', function(){
    return View('formes_juridiques');
});


Route::get('/formulaire', function(){
    return View('formulaire');
});

Route::get('/traitement_formulaire2', 'Formulaire2Controller@traiterFormulaire')->name('traitement_formulaire2');
Route::get('/formulaire2', function(){
    return View('formulaire2');
});

Route::post('/traitement_formulaire', [EntrpriseController::class, 'strore']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
