<?php

use Illuminate\Support\Facades\Route;
use Laravel\Pail\File;

Route::get('/', function () {
    return view('home');
});

Route::get('/images', function () {
    return File('resources/views/images/profile.png');
});
