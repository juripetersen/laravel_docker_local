<?php

use Illuminate\Support\Facades\Auth;
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

// Just for Development - (otherwise requests from Vue CLI dev server would be blocked)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');

Auth::routes();

Route::get('/user/logout', function() {
    Auth::logout();
    return response('Successfully logged out', 200);
});


Route::middleware(['auth'])->group(function () {

    // Get User
    Route::get('/users/current', function() { return request()->user(); });

    // SPA Routes (all other routes)
    Route::get('/{any}', 'SpaController@index')->where('any', '.*');


});

