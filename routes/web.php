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

Route::get('/login', function () {
    return view('login');
});
 Route::get('/pdetails', function () {
    return view('pdetails');
});

Route::get('/ddetails', function () {
    return view('ddetails');
});
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/profile/{id}','PagesController@profile');
// Route::get('/profile' ,'PagesController@profile');

Route::post('/details','loginController@login');
// Route::post('/pdetails','ldetailsController@pdetails');



Route::get('',function()
{
    return  view('medication');
});