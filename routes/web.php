<?php

use Illuminate\Support\Facades\Route;

// Root homepage (if you have a main one)
Route::get('/', function () {
    return view('CompanyListPage/main.index'); 
});

// Routes for each folder's main page
Route::get('/folder1', function () {
    return view('folder1.index');
});

Route::get('/folder2', function () {
    return view('folder2.index');
});

Route::get('/folder3', function () {
    return view('folder3.index');
});
