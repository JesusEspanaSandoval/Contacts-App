<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/', fn () => view('welcome'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact/create', [ContactsController::class, 'create'])->name('contact.create');

Route::get('/contact/{contact}/edit', [ContactsController::class, 'edit'])->name('contact.edit');

Route::get('/contact/{contact}/show', [ContactsController::class, 'show'])->name('contact.show');

Route::post('/contact/store', [ContactsController::class, 'store'])->name('contact.store');

Route::delete('/contact/{contact}/destroy', [ContactsController::class, 'destroy'])->name('contact.destroy');

Route::put('/contact/{contact}/update', [ContactsController::class, 'update'])->name('contact.update');
