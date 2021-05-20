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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	Route::get('/events', 'App\Http\Controllers\EventController@eventlist')->name('eventlist');
	Route::view('/add-event', 'events.addevent')->name('addevent');
	Route::post('/eventpost', 'App\Http\Controllers\EventController@eventpost')->name('eventpost');
	Route::get('/editevent/{id}', 'App\Http\Controllers\EventController@editevent')->name('editevent');
	Route::post('/eventupdate/{id}', 'App\Http\Controllers\EventController@eventupdate')->name('eventupdate');
	Route::delete('/eventdelete/{id}', 'App\Http\Controllers\EventController@eventdelete')->name('eventdelete');

});
