<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{name}', function ($name) {
    echo "welcome to laravel of php framework" . ' ' . $name;
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/users', 'User\UserController@getAllUser');

//Route::get('/users',function(){
//    echo 'users';
//});

Route::post('/user/register', 'User\UserController@insertUser');

Route::get('/user/findUser/{name}', 'User\UserController@findUser');

Route::get('/user/deleteUser/{name}', 'User\UserController@deleteUser');

Route::post('/checkUpdate', 'AppUpdateController@checkIsNeedUpdate');