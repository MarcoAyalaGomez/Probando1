<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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







Route::resource('Producto','App\Http\Controllers\ProductoController');
Route::get("/buscar",['uses'=> 'App\Http\Controllers\productosController@buscarPro', 'as'=> 'buscar']);
Route::view('login','login')->name('login')-> middleware('guest'); 
Route::view('Producto','Producto/create ')-> middleware('auth');

Route::post ('login',function(){
    $credentials = request()-> only('email', 'password');
   if (Auth::attempt ($credentials)){
       request()-> session()-> regenerate();

       return  redirect('Producto/create'); 
       
   }
   
   return redirect('login');
});
Route::post('master','App\Http\Controllers\adminController@logout');
