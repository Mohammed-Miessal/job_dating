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
    return view('index');
});



// ! Dashboard routes 
Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('admin.stats');
    });


    Route::get('/announcements', function () {
        return view('admin.announcements.read');
    });


    Route::get('/companies', function () {
        return view('admin.companies.read');
    });


    Route::get('/announcements/edit', function () {
        return view('admin.announcements.edit');
    });

    Route::get('/companies/edit', function () {
        return view('admin.companies.edit');
    });
});
