<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormCompController;
use App\Http\Controllers\Customer_controller;
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
    return view('welcome');
});

Route::get('/home',[DemoController::class,'index']);
// Route::get('/home','App\Http\Controllers\DemoController@index');

Route::get('/about', singleActionController::class);

Route::get('/form',[RegisterController::class,'index']);
Route::post('/form',[RegisterController::class, 'register']);


//component form 
Route::get('/comp',[FormCompController::class, 'index']);
Route::post('/comp',[FormCompController::class, 'register']);


Route::get('/customer/register', [Customer_controller::class,'index']);
Route::get('/customer', [Customer_controller::class,'view']);
Route::get('/customer/delete/{id}', [Customer_controller::class,'customerDelete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [Customer_controller::class,'customerEdit'])->name('customer.edit');
Route::post('/customer/edit/{id}', [Customer_controller::class,'customerupdate'])->name('customer.update');

Route::post('/customer', [Customer_controller::class, 'store']);


// Route::get('/home/{name?}/{id?}', function ($name = null, $id = null) {
//     $data = compact('name', 'id');
//     return view('home')->with($data);
// });

