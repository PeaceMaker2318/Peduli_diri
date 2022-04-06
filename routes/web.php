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
    return view('auth.index');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout'); 
Route::get('/formregis','AuthController@formregis');
Route::post('/storeregis','AuthController@regis');
Route::get ('/home','AuthController@home');

Route::group(['middleware'=>['auth','CheckRole:admin']],function()
{
    Route::get('/user','adminController@cari  ');    
    Route::get('/admin','adminController@index');    
    Route::get('/admin/delete/{id}','adminController@delete');
    Route::get('/admin/ubahAdmin/{id}','adminController@ubahAdmin');
    Route::get('/admin/ubahUser/{id}','adminController@ubahUser');
    Route::get('/admin/cetak/hanyaUser_pdf', 'adminController@cetakHanyaUser');
    Route::get('/admin/cetak/user_pdf', 'adminController@cetakUser');
});
Route::group(['middleware'=>['auth','CheckRole:user']],function() {
    Route::get('/dashboard','DashboardController@index');
    Route::get('/perjalanan','PerjalananController@index');
    Route::post('/perjalanan/create','PerjalananController@create');
    Route::get('/perjalanan/delete/{id}','PerjalananController@delete');
    Route::get('/profile','userController@index');
    Route::post('/profile/edit/{id}','userController@update');
    
    Route::post('/changepassword/{id}','userController@changepassword');
    
});