<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.pages.dashboard.index');
});



