<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    
    return 'Admin';
});

//route name
/*Route::namesapce('Admin')->group(function(){
	//All Route only access Controller or Methods in folder name Front 
	Route::get('users','UserController@showAdminName');
});*/