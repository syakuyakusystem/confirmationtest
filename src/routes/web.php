<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\ModalController;


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

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/contacts/order', [ContactController::class, 'order'])->name('store');
Route::post('/contacts', [ContactController::class, 'store']);

Route::get('/register', [ContactController::class, 'register'])->name('register');

Route::get('/home', [ContactController::class, 'home'])->name('home');

Route::get('/login', [ContactController::class, 'login'])->name('login');


Route::get('/admin', [ContactController::class, 'admin'])->name('admin');

// Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');
// Route::get('/admin/search', [ContactController::class, 'search']);

Route::get('/modal', [ModalController::class, 'modal']);