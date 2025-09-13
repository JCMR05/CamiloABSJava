<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
});

// Route::get('/app', function () {
//     return view('usuario.index');
// });

// Route::get('/action', function () {
//     return view('usuario.action');
// });

/* Route::get('/app', function () {
    return view('usuario.index');
});*/

Route::resource("/usuario", UserController::class );
Route::patch('usuario/{usuario}/toggle',[UserController::class, 'toggleStatus']) -> name('usuario.toggle');
