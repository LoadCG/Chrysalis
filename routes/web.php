<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;

Route::resource('/', usuarioController::class);
//Route::get('/', 'usuarioController@index');
