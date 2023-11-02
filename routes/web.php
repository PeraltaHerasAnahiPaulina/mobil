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
    return view('pages.dashboard');
});
Route::get('profile', [App\Http\Controllers\Controller::class, 'profile']);

Route::get('usermanagement', [App\Http\Controllers\registroController::class, 'usuarioadmin']);
Route::get('usermanagementedit/{idu}', [App\Http\Controllers\registroController::class, 'edit']);
Route::put('usermanagementedit/{idu}', [App\Http\Controllers\registroController::class, 'actualizar']);
Route::get('usermanagementshow/{idu}', [App\Http\Controllers\registroController::class, 'show']);
route::get('registrouser',[App\Http\Controllers\registroController::class,'registro']);
Route::post('registrouser', [App\Http\Controllers\registroController::class, 'proceso']);
Route::delete('usermanagementdestroy/{idu}', [App\Http\Controllers\registroController::class, 'destroy'])->name('usermanagementdestroy');
