<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LanguageTranslator', function () {
    return view('LanguageTranslator');
});

