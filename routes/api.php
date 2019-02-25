<?php

use Illuminate\Http\Request;

Route::resource('dataemas', 'DataEmasController', ['except' => ['create', 'edit']]);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
