<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PlatsController;
use App\Http\Controllers\ProfilController;
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

Route::resource('/plat', PlatsController::class)->middleware('auth', 'roleAdminSup');
// Route::resource('profil', ProfilController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('first');
// });

// Route::get('/profil', function () {
//     return view('profil.index');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [PlatsController::class, 'indexx'])->name('lemhome');

// Route::group(['middleware'=>[]],function(){
    Route::get('/profil', [ProfilController::class, 'index'])->name('lememhome')->middleware('role');
// });

// Route::group(['middleware' => ['role', 'roleAdmin']], function () {
//     Route::get('/plat', [ProfilController::class, 'indexx']);
// })->name('lememhome');

Route::get('/pedit',[ProfilController::class , 'edit'])->name('editing');
// Route::patch('/profil/{id}', [ProfilController::class,'update']);
Route::put('/profil/password', [ProfilController::class, 'updatepassword'])->name('update-password');
Route::delete('/profil/{id}', [ProfilController::class, 'destroy']);
Route::get('/role/{id}', [ProfilController::class, 'changeRole']);


