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
    return view('welcome');
});

Route::get('/pizza', function () {
    $pizzas = array(
        array(
            'type' => 'peperonni',
            'price' => 5
        ),array(
            'type' => 'hawuaian',
            'price' => 25
        ),array(
            'type' => 'cheese',
            'price' => 15
        )
        );
    return view('pizza', ['pizzas' => $pizzas]);
}); 

