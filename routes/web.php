<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisplayAnnouncements;
use Illuminate\Support\Facades\Auth;

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

Route::get('/announcements', [DisplayAnnouncements::class, 'index'])->name('allannouncements.index');
Route::get('/announcements/show/{id}', [DisplayAnnouncements::class, 'show'])->name('showannouncements.show');


Auth::routes();

// ! Dashboard routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {


    // ? Dashboard :
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::match(['get', 'post'], '/', [DashboardController::class, 'index'])->name('dashboard.index');



    // ? Companies routes :
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
    Route::get('/companies/show/{id}', [CompanyController::class, 'show'])->name('companies.show');
    Route::get('/companies/edit/{company}', [CompanyController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/update/{company}', [CompanyController::class, 'update'])->name('companies.update');
    Route::delete('/companies/delete/{company}', [CompanyController::class, 'destroy'])->name('companies.delete');


    // ? Companies routes :
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements/store', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/show/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
    Route::get('/announcements/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/announcements/update/{announcement}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/delete/{announcement}', [AnnouncementController::class, 'destroy'])->name('announcements.delete');
});
