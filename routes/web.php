<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/support', [PagesController::class, 'support']);

Route::get('/map', [PagesController::class, 'map'])->name('map');
Route::post('/map', [PagesController::class, 'SelectMap']);
Route::get('/map/{year}/{quarter}/{language}', [PagesController::class, 'SelectedMap'])->name('SelectedMap'); 

Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard'); 
Route::get('/dashboard/{year}/{quarter}/{language}', [PagesController::class, 'EditData']); 
Route::post('/dashboard/update', [PagesController::class, 'UpdateData']); 
Route::get('/dashboard/update', function () {
    return view('dashboard');
});

Route::post('/dashboard/add', [PagesController::class, 'AddData']);
Route::get('/dashboard/add', function () {
    return redirect('/dashboard');
});

Route::get('/test', [PagesController::class, 'Test']);
Route::post('/dashboard/insert', [PagesController::class, 'InsertData']);

Route::post('/dashboard/{year}/{quarter}/{language}/delete', [PagesController::class, 'DeleteData']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');