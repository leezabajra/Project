<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\StockController;




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

Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/register',[RegisterController::class,'register'])->name('admin.register.view');
Route::post('/submit/register',[RegisterController::class,'submitRegister'])->name('admin.register.submit');
Route::get('/login',[RegisterController::class,'viewLogin'])->name('admin.login.view');
Route::post('/login/submit',[RegisterController::class,'submitLogin'])->name('admin.login.submit');
Route::resource('products', ProductController::class);
Route::resource('types', TypeController::class);
Route::resource('stocks', StockController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project','App\Http\Controllers\BillController@index');
Route::get('/getPrice/{id}', 'App\Http\Controllers\BillController@getPrice');



Route::group(['middleware'=>'auth'],function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/logout',[DashboardController::class, 'logout'])->name('admin.logout');

    
});
