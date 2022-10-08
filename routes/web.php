<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [CategoryController::class, 'catlist']);

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
            return view('admin/dashboard/dashboard');})->name('dashboard')->middleware('auth:admin');

        Route::get('/admin', function () {
            return view('dashboard');})->middleware('auth:admin');

        Route::get('/admin/newcat', function () {
            return view('admin/wordControl/newcat');})->name('newcat')->middleware('auth:admin');

        Route::get('/admin/newword', function () {
            return view('admin/wordControl/newword');})->name('newword')->middleware('auth:admin');

        Route::get('/admin/csv', function () {
            return view('admin/wordControl/uploadcsv');})->name('csv')->middleware('auth:admin');

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
Route::get('practice/{id}', [WordController::class,'wordsequence']);

Route::get('/catList', [CategoryController::class, 'catlist']);







// admin 
// Route::get('/admin', function () {
//     return view('admin/dashboard/dashboard');
// });
            // word management 
// new word
// Route::get('admin/newword', function () {
//     return view('admin/wordControl/newword');
// });
// new cat
// Route::get('admin/newcat', function () {
//     return view('admin/wordControl/newcat');
// });
// upload csv
// Route::get('admin/csv', function () {
//     return view('admin/wordControl/uploadcsv');
// });

Route::post('admin/newword', [WordController::class, 'createword']);
Route::post('admin/newcat', [CategoryController::class, 'createcategory']);





// test
Route::get('/test', function () {
    return view('includes/master2');
});