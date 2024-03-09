<?php

use App\Http\Controllers\categorieController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\exportcontroller;
use App\Http\Controllers\pdfcontroller;
use App\Http\Controllers\produitController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Auth;
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



//Route::get('/',[\App\Http\Controllers\usercontroller::class, 'index']);
//Route::post('/user/store',[\App\Http\Controllers\usercontroller::class, 'store'])->name('user.store');
//Route::get('/users.listeusers',[\App\Http\Controllers\usercontroller::class, 'index'])->name('users.listeusers');
//Route::get('update_etudiant/{id}',[\App\Http\Controllers\usercontroller::class, 'edit'])->name('update_etudiant');

//Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clients/export', [exportcontroller::class, 'clientexport'])->name('clients.clientexport');
Route::get('/produits/export', [exportcontroller::class, 'produitexport'])->name('produits.produitexport');
Route::post('client/view-pdf', [pdfcontroller::class, 'viewPDF'])->name('client.view-pdf');
Route::get('download-pdf', [pdfcontroller::class, 'downloadPDF'])->name('download-pdf');
Route::get('/commandes/encours',[commandeController::class, 'encours'])->name('commandes.encours');
Route::get('/commandes/valider',[commandeController::class, 'valider'])->name('commandes.valider');
Route::get('/update_commande/{id}',[commandeController::class, 'updatecommande']);


Route::resources([
    'roles' => RoleController::class,
    'users' => usercontroller::class,
    'produits' => produitController::class,
    'commandes' => commandeController::class,
    'clients' => clientController::class,
    'categories' => categorieController::class,
    'dashboards'=> DashboardController::class,
]);
