<?php

use App\Http\Controllers\AsignRoleToUserController;
use App\Http\Controllers\employee;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('admin1/index');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('admin1/index');
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
Route::middleware('auth')->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('assign', AsignRoleToUserController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('contact', [employee::class, 'contact']);
    Route::get('function', [employee::class, 'function']);
    Route::get('billing', [employee::class, 'billing']);
});
