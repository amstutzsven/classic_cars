<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/messages', function () {
    return view('messages');
});
 