<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[App\http\Controllers\backend\UserController::class,'profile'])->name('profile');
//Gestion des employes

//liste des employes
Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'Alluser'])->name('alluser');

// nouveau employes

Route::get('/adduser-index', [App\Http\Controllers\backend\UserController::class, 'Adduserindex'])->name('adduserindex');
Route::post('/insert-user', [App\Http\Controllers\backend\UserController::class, 'Insertuser'])->name('insertuser');

Route::get('/addposte-index', [App\Http\Controllers\backend\UserController::class, 'Addposteindex'])->name('addposteindex');
Route::post('/insert-poste', [App\Http\Controllers\backend\UserController::class, 'Insertposte'])->name('insertposte');
//modifier les information
Route::get('/edit-user/{id}', [App\Http\Controllers\backend\UserController::class, 'Edituser'])->name('Edituser');
Route::post('/update-user/{id}', [App\Http\Controllers\backend\UserController::class, 'Updateuser'])->name('Updateuser');
//supprimer un employe
Route::get('/delete-user/{id}', [App\Http\Controllers\backend\UserController::class, 'Deleteuser'])->name('Deleteuser');

Route::get('/paie-index', [App\Http\Controllers\backend\UserController::class, 'paieindex'])->name('paieindex');

Route::get('/paie-create', [App\Http\Controllers\backend\UserController::class, 'paiecreate'])->name('paiecreate');

Route::get('/paie-add/{id}', [App\Http\Controllers\backend\UserController::class, 'Paieadd'])->name('Paieadd');
Route::post('/insert-fiche', [App\Http\Controllers\backend\UserController::class, 'Insertfiche'])->name('insertfiche');
Route::get('/fiche/{id}', [App\Http\Controllers\backend\UserController::class, 'fiche'])->name('fiche');

Route::get('/fiche_print/{id}', [App\Http\Controllers\backend\UserController::class, 'fiche_print'])->name('fiche_print');

Route::get('/all_fiche', [App\Http\Controllers\backend\UserController::class, 'Allfiche'])->name('allfiche');



Route::get('/filtre', [App\Http\Controllers\backend\UserController::class, 'filtre'])->name('filtre');



Route::post('/filter', [App\Http\Controllers\backend\UserController::class, 'filter'])->name('filter');


Route::get('/filtre_employe', [App\Http\Controllers\backend\UserController::class, 'filtre_employe'])->name('filtre_employe');



Route::post('/filter_employe', [App\Http\Controllers\backend\UserController::class, 'filter_employe'])->name('filter_employe');


