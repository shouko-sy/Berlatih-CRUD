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

// Route::get('/', function () {
//     return view('welcome1');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/', 'HomeController@home');


// Route::get('/register', 'AuthController@register');

// Route::get('/welcome', 'AuthController@welcome');

// Route::post('/welcome', 'AuthController@welcome_post');

Route::get('/master', function (){
    return view('adminlte.master');
});

Route::get('/', function(){
    return view('items.index');
});

Route::get('/data-tables', function (){
    return view('items.data-tables');
});