<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', 'App\Http\Controllers\Maincontroller@showHomePage')->name("main.home");
Route::get('/about', 'App\Http\Controllers\Maincontroller@showAboutPage')->name("main.about");

Route::get('/forms/imm5707', 'App\Http\Controllers\FormController@showIMM5707Form')->name('form.imm5707');
Route::get('/forms/imm5709', 'App\Http\Controllers\FormController@showIMM5709Form')->name('form.imm5709');
Route::get('/forms/imm5710', 'App\Http\Controllers\FormController@showIMM5710Form')->name('form.imm5710');
Route::get('/forms/imm5257', 'App\Http\Controllers\FormController@showIMM5257Form')->name('form.imm5257');

Route::get('/immigration-path-personal-details', 'App\Http\Controllers\MainController@showImmigrationPathForm')->name("immigration.path");
Route::get('/immigration-path-wp-extension', 'App\Http\Controllers\MainController@showWPEForm')->name("immigration.wpe");

Route::get('/personal-info', 'App\Http\Controllers\ApplicantController@showPersonalQuestions')->name("immigration.questions");
