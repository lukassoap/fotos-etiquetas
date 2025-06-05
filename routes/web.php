<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("photos", PhotoController::class); // podemos usar el nombre que queramos en project