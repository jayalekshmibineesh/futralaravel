<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::get('/userhome',[HomeController::class,'userhome'])->name('userhome');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');
Route::post('update/{id}',[HomeController::class,'update'])->name('update');
Route::get('/user_profile,',[HomeController::class,'user_profile'])->name('user_profile');