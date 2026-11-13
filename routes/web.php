<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;


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

// Route::get('/quest/{id}', function(string $id) {
//     validator(['id' => $id], [
//         'id' => 'required|integer|min:1'
//     ])->validate();

//     return 'Détails de la quête ' . $id;
// });

Route::get('/quests/{id}', [QuestController::class, 'show'])->whereNumber('id')->name('quests.show');