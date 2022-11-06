<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [DashboardController::class, 'home'])->name('home');
Route::get('/general', [DashboardController::class, 'general'])->name('general');
Route::get('/userprofile', [DashboardController::class, 'userprofile'])->name('userprofile');


Route::post('/store', [FaqController::class, 'store'])->name('store');
Route::get('/editfaq/{id}', [FaqController::class, 'editfaq'])->name('editfaq');
Route::put('/updatefaq/{id}', [FaqController::class, 'updatefaq'])->name('updatefaq');
Route::get('/destroy/{id}', [FaqController::class, 'destroy'])->name('destroy');
Route::get('/restore/{id}', [FaqController::class, 'restore'])->name('restore');
Route::get('/forcedelete/{id}', [FaqController::class, 'forcedelete'])->name('forcedelete');
Route::get('/allfaq', [FaqController::class, 'allfaq'])->name('allfaq');
Route::get('/viewfaq', [FaqController::class, 'viewfaq'])->name('viewfaq');
Route::get('/trashfaq', [FaqController::class, 'trashfaq'])->name('trashfaq');


Route::get('/alluser', [UserController::class, 'alluser'])->name('alluser');
Route::get('/adduser', [UserController::class, 'adduser'])->name('adduser');
Route::get('/edituser', [UserController::class, 'edituser'])->name('edituser');
Route::get('/viewuser', [UserController::class, 'viewuser'])->name('viewuser');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
