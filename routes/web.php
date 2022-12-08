<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home');
});

Auth::routes();
Route::get('logout', [LoginController::class,'logout']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@getDashboard')->name('admin.dashboard');
    Route::get('/dashboard/manage-users', 'App\Http\Controllers\Admin\DashboardController@manageUsers')->name('admin.users');
    Route::get('/dashboard/manage-procedures', 'App\Http\Controllers\Admin\DashboardController@manageProcedures')->name('admin.procedures');
    Route::get('/dashboard/manage-forms', 'App\Http\Controllers\Admin\DashboardController@manageForms')->name('admin.forms');    
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', 'App\Http\Controllers\Maincontroller@showHomePage')->name("main.home");
Route::get('/about', 'App\Http\Controllers\Maincontroller@showAboutPage')->name("main.about");

Route::get('/forms/imm5707', 'App\Http\Controllers\FormController@showIMM5707Form')->name('form.imm5707');
Route::get('/forms/imm5709', 'App\Http\Controllers\FormController@showIMM5709Form')->name('form.imm5709');
Route::get('/forms/imm5710', 'App\Http\Controllers\FormController@showIMM5710Form')->name('form.imm5710');
Route::get('/forms/imm5257', 'App\Http\Controllers\FormController@showIMM5257Form')->name('form.imm5257');

Route::get('/immigration-path-personal-details', 'App\Http\Controllers\MainController@showImmigrationPathForm')->name("immigration.path");
Route::get('/immigration-path-wp-extension', 'App\Http\Controllers\ApplicantController@showWPQuestions')->name("immigration.wpe");
Route::get('/immigration-path-sp-extension', 'App\Http\Controllers\ApplicantController@showSPQuestions')->name("immigration.spe");

Route::post('/immigration-path-sp-extension/create', 'App\Http\Controllers\ApplicantController@createSPApplicant')->name("immigration.spe.create");
Route::post('/immigration-path-wp-extension/create', 'App\Http\Controllers\ApplicantController@createWPApplicant')->name("immigration.wpe.create");
Route::get('/immigration-info-success', 'App\Http\Controllers\ApplicantController@showSuccessPage')->name("immigration.success");



Route::get('logout', [LoginController::class,'logout']);
