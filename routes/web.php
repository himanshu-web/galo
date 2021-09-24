<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Client\IndexController;

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
    return view('client/index');
});

Auth::routes();
Route::resources(['users' => UserController::class]);
Route::resources(['roles' => RoleController::class]);
Route::resources(['permissions' => PermissionController::class]);

// Client
Route::get('index', [IndexController::class, 'Index'])->name('index');
Route::get('about', [IndexController::class, 'About'])->name('about');
Route::get('central_executive', [IndexController::class, 'CentralExecutive'])->name('central_executive');
Route::get('district_executive', [IndexController::class, 'DistrictExecutive'])->name('district_executive');
Route::get('women_wings', [IndexController::class, 'WomenWings'])->name('women_wings');
Route::get('song', [IndexController::class, 'Song'])->name('song');
Route::get('galo_mla', [IndexController::class, 'GaloMla'])->name('galo_mla');
Route::get('contact', [IndexController::class, 'Contact'])->name('contact');

Route::middleware('auth')->group(function () {

    Route::get('dashboard/dashboard', [DashboardController::class, 'Index'])->name('dashboard/dashboard');
    Route::resources([
    ]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

