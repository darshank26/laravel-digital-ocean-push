<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/demo/{name}/{id?}', function ($name,$id = null) {
    return " Hello World $name $id";
});

Route::get('hello/{name?}', function ($name = null) {
    $html_data = "<h2>This is H2 Tag</h2>";
    $data = compact('name','html_data');
    return view('home')->with($data);
    
});


// Basic Controller 

Route::get('/test', [TestController::class,'index']);

Route::get('/about', 'App\Http\Controllers\TestController@about');


// Single Action Controller
Route::get('/singleaction', SingleActionController::class);

// Resource Action Controller
Route::resource('/photo', ResourceController::class);


// form controller

Route::get('/form', [FormController::class,'index']);

Route::post('/form', [FormController::class,'register']);


