<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login',[AdminController::class,'loginForm']);
    Route::post('admin/login',[AdminController::class,'store'])->name('admin.login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth:admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




// wordcard 
Route::get('/practice', function () {
    return view('wordCard/wordCard');
});


Route::get('/catList', function () {
    return view('wordCard/catList');
});

Route::get('admin', function () {
    return view('admin/dashboard/dashboard');
});

Route::get('admin/newWord', function () {
    return view('admin/wordControl/newWord');
});




// admin 
Route::get('/admin', function () {
    return view('admin/dashboard/dashboard');
});
// word management 
Route::get('/newword', function () {
    return view('admin/wordControl/newword');
});
Route::get('/newcat', function () {
    return view('admin/wordControl/newcat');
});
Route::get('/csv', function () {
    return view('admin/wordControl/uploadcsv');
});




// test
Route::get('/test', function () {
    return view('includes/master2');
});