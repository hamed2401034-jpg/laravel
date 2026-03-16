<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Http\Request;
Route::post('/login', function (Request $request) {
    return "Welcome " . $request->email . "! System is now monitoring for threats.";
});