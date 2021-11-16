<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Middleware\LogCheck;
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


Route::get('/', 'HomeController@index');
Route::get('/author', 'HomeController@author');
Route::get('/ships', 'HomeController@ships');
Route::get('/ships/{id}', 'HomeController@shipdetail')->where('id', '[0-9]+');

Route::get('/login', "HomeController@login");
Route::post('login/process', 'FormController@login');
Route::get('/logout', 'FormController@logout')->middleware('addlog:7');

Route::get('/signup', "HomeController@signup");
Route::post('signup/process', 'FormController@signup');

Route::get('/profile', 'HomeController@profile')->middleware('logcheck');
Route::get('/message', 'HomeController@message');

Route::post('/rent', 'FormController@rent')->middleware('logcheck', 'addlog:8');

Route::get('/admin', 'AdminController@index')->middleware('admincheck');
Route::get('/admin/ships', 'AdminController@ships')->middleware('admincheck');
Route::get('/admin/users', 'AdminController@users')->middleware('admincheck');
Route::get('/admin/msg', 'AdminController@msg')->middleware('admincheck');
Route::get('/admin/log', 'AdminController@log')->middleware('admincheck');
Route::get('/admin/log/{order}', 'AdminController@orderlog')->middleware('admincheck');



Route::get('/sort', 'HomeController@sort');


Route::get('/users/grant/{id}', 'AdminController@grantadmin')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:2');
Route::get('/users/delete/{id}', 'AdminController@deleteUser')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:3');

Route::get('ships/delete/{id}', 'AdminController@deleteShip')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:1');
Route::get('ships/add/{id}', 'AdminController@addShip')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:9');
Route::get('ships/editform/{id}', 'AdminController@editform')->where('id', '[0-9]+')->middleware('admincheck');
Route::post('ships/edit/{id}', 'AdminController@editShip')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:5');
Route::get('ships/insertform', 'AdminController@insertform')->where('id', '[0-9]+')->middleware('admincheck');
Route::post('ships/insert', 'AdminController@insertShip')->where('id', '[0-9]+')->middleware('admincheck', 'addlog:9');


Route::get('/sendmsg', 'FormController@sendmsg')->middleware('logcheck');


