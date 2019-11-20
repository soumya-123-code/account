<?php

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
    return view('login');
});


Route::get('create', 'Users@create');


Route::group(['middleware'=>['logcheck']],
function(){
    Route::post('loginsubmit', 'Users@loginsubmit');
    Route::post('createsubmit', 'Users@createsubmit');
    Route::get('list', 'Users@list');
}

);
   