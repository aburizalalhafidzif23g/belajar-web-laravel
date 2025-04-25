<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
});
 Route::get('/tampil-user', [UserController::class, 'tampilUser']);
 Route::get('/tambah-user', [UserController::class, 'tambahUser']);
 Route::post('/tambah-user', [UserController::class, 'simpanUser']);

 //edit user
 Route::get('edit-user/{id}',[UserController::class,'edit'])->name('user.edit');
 Route::put('edit-user/{id}',[UserController::class, 'update'])->name('user.update');

 //delete user
 Route::delete('delete-user/{id}',[UserController::class,'destroy'])->name('user.destroy');