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
    return redirect('login');
})->middleware('guest');

Route::auth();

Route::get('/student',function(){
    return view('student');
});

Route::get('/teacher',function(){
    return view('teacher');
});

Route::get('/form','ProfileController@edit');

Route::get('/data/{id}','DataController@create');

Route::post('/data','DataController@store');

Route::match(['put','patch'],'/register/profile', 'ProfileController@update');

Route::post('/register/profile', 'ProfileController@store');

Route::get('/home', 'HomeController@index');

Route::get('/mailbox', 'MessageController@index');

Route::get('/mailbox/new', 'MessageController@create');

Route::get('/mailbox/sensei', 'MessageController@createMail');

Route::get('/home/teacher', 'ProfileController@teacherList');

Route::post('/mailbox/sensei', 'MessageController@createMailId');

Route::post('/home/teacher', 'ProfileController@teacherListId');