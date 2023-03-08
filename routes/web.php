<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});


route :: get('/demo',function(){
    echo "Hello World";
});
*/
route :: any('/test',function(){
    echo "Hello World 1";
});


Route::get('/', function () {
    return view('home');
});
