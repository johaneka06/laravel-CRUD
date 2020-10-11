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


//All function in this route will be moved using controller file.
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/auth', function() {
    //Authorization login. Will be moved using controller file
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function() {
    //Register user. Will be moved using controller file
});

Route::get('/logout', function() {
    //Logout. Will be moved using controller file
    return redirect('/');
});

Route::post('/insert', function() {
    //Insert function. Will be moved using controller file
});

Route::get('/item/{id}', function($id) {
    return view('updateItem', ['item' => 'Test', 'id' => $id]);
});

Route::post('/item/{id}/update', function($id) {
    //update function. Will be moved using controller file
});

Route::get('/item/{id}/delete', function($id) {
    //Delete function. Will be moved using controller file
});