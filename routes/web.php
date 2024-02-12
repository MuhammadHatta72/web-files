<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ArsipTravelController;
use App\Http\Controllers\ArsipExpenReportController;
use App\Http\Controllers\ArsipAdvanceController;
use App\Http\Controllers\TravelAuthorizationController;

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

Route::get('/', [LandingPageController::class, 'home']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function () {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return (new DashboardController)->admin();
            } else {
                return (new DashboardController)->admin();
            }
        } else {
            return view('auth.login');
        }
    })->name('home');
});

Route::get('edit-profile', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 'admin') {
            return view('admin.profile_user');
        }
    } else {
        return view('auth.login');
    }
})->name('profile.edit');


Route::middleware('can:admin')->group(function () {
    // Profile
    Route::resource('admin-profile', AdminProfileController::class);

    Route::resource('arsip_travels', ArsipTravelController::class);
    Route::resource('arsip_expen_reports', ArsipExpenReportController::class);
    Route::resource('arsip_advances', ArsipAdvanceController::class);
    Route::resource('travel_authorizations', TravelAuthorizationController::class);
    Route::get('print_travel_authorization/{id}', [TravelAuthorizationController::class, 'print'])->name('print_travel_authorization');
});
