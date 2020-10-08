<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\ProjectsController@index');
Route::get('about', function () {
    return view('about');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::get('projects', function () {
    return view('projects');
})->name('projects')->middleware('auth');


Route::get('show', function () {
    return view('show');
})->name('show')->middleware('auth');


Route::get('dashboard', 'App\Http\Controllers\ProjectsController@dashboard')->name('dashboard')->middleware('auth');

Route::get('completedproject', 'App\Http\Controllers\ProjectsController@showcompleted')->name('completedproject')->middleware('auth');
Route::get('ongoingproject', 'App\Http\Controllers\ProjectsController@showongoing')->name('ongoingproject')->middleware('auth');
Route::get('holdproject', 'App\Http\Controllers\ProjectsController@showhold')->name('holdproject')->middleware('auth');
Route::get('showcontact', 'App\Http\Controllers\ContactController@showcontact')->name('contact')->middleware('auth');

Route::get('completed', 'App\Http\Controllers\ProjectsController@completed')->name('completed');
Route::get('ongoing', 'App\Http\Controllers\ProjectsController@ongoing')->name('ongoing');

Route::POST('addproject', 'App\Http\Controllers\ProjectsController@store')->middleware('auth');
Route::POST('updateproject', 'App\Http\Controllers\ProjectsController@update')->middleware('auth');

Route::POST('contact', 'App\Http\Controllers\ContactController@store');

Route::get('project_diactivate/{id}', 'App\Http\Controllers\ProjectsController@project_diactivate')->middleware('auth');
Route::get('project_activate/{id}', 'App\Http\Controllers\ProjectsController@project_activate')->middleware('auth');
Route::get('project_delete/{id}', 'App\Http\Controllers\ProjectsController@project_delete')->middleware('auth');
Route::get('project_edit/{id}', 'App\Http\Controllers\ProjectsController@project_edit')->middleware('auth');


Route::get('mark_as_read/{id}', 'App\Http\Controllers\ContactController@mark_as_read')->middleware('auth');
Route::get('mark_as_unread/{id}', 'App\Http\Controllers\ContactController@mark_as_unread')->middleware('auth');
Route::get('message_delete/{id}', 'App\Http\Controllers\ContactController@message_delete')->middleware('auth');
Route::get('message_delete2/{id}', 'App\Http\Controllers\ContactController@message_delete2')->middleware('auth');
Route::get('message_show/{id}', 'App\Http\Controllers\ContactController@message_show')->middleware('auth');