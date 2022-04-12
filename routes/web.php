<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormHandler;


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

Route::view('test','test');

Route::get('/home',[Home::class, 'index']);
Route::get('/user/{id}',[UserController::class, 'index']);

Route::view('sidebar','sidebar');

Route::view('form','form');
Route::post('formSubmit',[FormHandler::class, 'index']);

Route::get('/learn', function () {
    return view('learn',array('data'=>array('name'=>'Kiran')));
});

Route::view('blog','blogpage');


// Middleware groups
Route::group(['middleware'=>['userCheck']],function(){
    Route::view('blog1','blogpage1');
});
Route::view('denied','denied');

