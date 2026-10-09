<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'Hello world!';
});

Route::get('/hello/{name}', function(string $name) {
    return 'Hello ' . $name;
});

Route::get('/quest', function() {
    return 'Liste des quêtes';
});

Route::get('/quest/{id}', function(string $id) {
    return 'Détails de la quête ' . $id;
});