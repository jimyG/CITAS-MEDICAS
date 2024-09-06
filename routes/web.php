<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    // redirecciona a pagina login de moonshine
    return redirect('/admin');
});
