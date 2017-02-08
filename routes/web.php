<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('college/create',[
    'uses'=>'CreateCollegeController@create',
    'as'=>'college.create'
]);

Route::get('college/delete/{college}',[
    'uses'=>'CreateCollegeController@delete',
    'as'=>'college.delete'
]);

Route::post('college/create',[
   'uses'=>'CreateCollegeController@store',
    'as'=>'college.store'
]);

Route::get('college',[
    'uses'=>'CreateCollegeController@index',
    'as'=>'college.index'
]);

Route::get('college/{college}',[
    'uses'=>'CreateCollegeController@show',
    'as'=>'college.show'
]);

Route::get('college/{college}/student/create',[
   'uses'=>'StudentController@create',
    'as'=>'student.create'
]);

Route::post('college/{college}/student/create',[
    'uses'=>'StudentController@store',
    'as'=>'student.store'
]);

