<?php

Route::get('/', function () {
    
    //return view('home');
    //return "usando git";
    return view('website.index');
});


/*
Route::post('/form', 'ambientesController@store');


Route::post('/form', function () {
    
    return "usando post";
});


Route::get('/form', 'ambientesController@show');

//controladores
Route::get('/controler', 'ambientesController@index');
*/


Route::get('/tienda', function () {
    
    return view('website.tienda');
});

Route::get('/carrito', function () {
    
    return view('website.carrito');
});