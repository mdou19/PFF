<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationEvenementController;
use App\Models\Lieux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [MainController::class, 'home' ])->name('acc');

Route::middleware('auth')->group(function() {
Route::get('evenements', [EvenementController::class, "index" ])->name('evenements.index');
Route::get('evenements/nouveau', [EvenementController::class, "create" ])->name('evenements.create');
Route::post('evenements/nouveau', [EvenementController::class, "store" ])->name('evenements.store');
Route::get('evenements/{evenement}edit', [EvenementController::class, "edit" ])->name('evenements.edit');
Route::put('evenements/{evenement}update', [EvenementController::class, "update" ])->name('evenements.update');
Route::delete('evenements/{evenement}destroy', [EvenementController::class, "destroy" ])->name('evenements.destroy');


Route::post('reservations/nouveau', [ReservationController::class, "store" ])->name('reservations.store');
});
Route::get('evenements/{evenement}', [EvenementController::class, "show" ])->name('evenements.show');

//Route::get('evenements/{evenement}/reserver', [ReservationEvenementController::class, "create" ])->name('evenements.reserver');
Route::post('evenements/{evenement}/reserver', [ReservationEvenementController::class, "store" ])->name('evenements.reserver');


Route::get('evenement', [MainController::class, 'list' ])->name('listeevenement');

Route::get('lieux', [MainController::class, 'listlieux' ])->name('lieuxevenement');

Route::get('contactnous', [MainController::class, 'contact' ])->name('contact');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::resource('promo', PromoController::class)->only('index');
    Route::get('/admin', [AdminController::class, "index" ])->name('admin');
    Route::get('/admin/compte', [AdminController::class, "listercompte" ])->name('compte');
    Route::get('/admin/lieux', [AdminController::class, "listerlieux" ])->name('lieux');
    Route::get('/admin/{lieux}/editlieux', [AdminController::class, "edit" ])->name('editlieux');
    Route::put('/admin/{lieux}/updatelieux', [AdminController::class, "update" ])->name('updatelieux');
    Route::delete('/admin/{lieux}/destroylieux', [AdminController::class, "destroylieux" ])->name('destroylieux');
    Route::get('/admin/event', [AdminController::class, "listerevent" ])->name('event');
    Route::get('/admin/participe', [AdminController::class, "participeevent" ])->name('participe');
    Route::delete('/admin/{reservation_event}/destroy', [AdminController::class, "destroy" ])->name('participe.destroy');
    Route::get('/admin/create', [AdminController::class, "create" ])->name('createlieux');
    Route::post('/admin/sotrelieux', [AdminController::class, "store" ])->name('sotrelieux');
    Route::get('/home', [AdminController::class, "home" ])->name('home');


});
