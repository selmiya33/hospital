<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SectionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// Route::get('/dashboardAdmin',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard.admin');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/dashboard/user', function () {
            return view('dashboard.user.dashboard');
        })->middleware(['auth:web', 'verified'])->name('dashboard.user');

        Route::get('/dashboard/admin', function () {
            return view('dashboard.admin.dashboard');
        })->middleware(['auth:admin', 'verified'])->name('dashboard.admin');


        require __DIR__ . '/auth.php';

        Route::resource('/sections', SectionController::class)->middleware('auth:admin');
        Route::resource('/doctors', DoctorController::class)->middleware('auth:admin');


    }
);


