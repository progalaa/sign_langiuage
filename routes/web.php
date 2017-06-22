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



/*************** API Routes ************/
Route::get('/api/images', 'ImageController@getAll');
Route::get('/api/image/{id}', 'ImageController@getImage');
Route::get('/api/text/{keyword}', 'ImageController@getTextImage');



/*************** Admin Routes ************/

Route::group(['middleware'=>['web']],function(){
    Route::get('/admin/signform',['as'=>'signform','uses'=>'UserController@signform']);
    Route::post('/admin/signup',['as'=>'signup','uses'=>'UserController@signup']);
    Route::get('/admin/login',['as'=>'login','uses'=>'UserController@login']);
    Route::post('/admin/handleLogin',['as'=>'handleLogin','uses'=>'UserController@handleLogin']);
    Route::get('/logout',['uses'=>'UserController@getLogout','as'=>'logout']);

    Route::get('admin/dashboard',['as'=>'dashboard','uses'=>'UserController@dashboard']);
});


// Crud Channels Routes
Route::get('admin/addImage',['as'=>'addImage','uses'=>'CrudController@addImage']);
Route::post('admin/doAddImage',['as'=>'doAddImage','uses'=>'CrudController@doAddImage']);
Route::get('admin/viewImages',['as'=>'viewImages','uses'=>'CrudController@viewImages']);
Route::get('admin/deleteImage/{id}',['uses'=>'CrudController@deleteImage']);
Route::get('admin/editImage/{id}',['uses'=>'CrudController@editImage']);
Route::post('admin/doEditImage/{id}',['uses'=>'CrudController@doEditImage']);