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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/users', [App\Http\Controllers\UserController::class,'index']);
Route::get('/membership', [App\Http\Controllers\MemberController::class,'index']);
Route::get('/resources', [App\Http\Controllers\ResourceController::class,'index']);
Route::post('/resourceCreate', [App\Http\Controllers\ResourceController::class,'create'])->name('admin.resourceCreate');
Route::post('/create', [App\Http\Controllers\UserController::class,'create'])->name('admin.create');
Route::get('/membership', function () {
    return view('admin.membership');
});