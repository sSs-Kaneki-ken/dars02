<?php

use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/', function () {
    return view('dashboard.adminDashboard');
});
Route::get('/dashboard2', function () {
    return view('dashboard.adminDashboard2');
});
Route::get('/dashboard3', function () {
    return view('dashboard.adminDashboard3');
});

Route::get('/iframe', function () {
    return view('iframe.iframe');
});

// Pages папка
Route::get('/widgets', function () {
    return view('pages.widgets');
});
Route::get('/kanban', function () {
    return view('pages.kanban');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/calendar', function () {
    return view('pages.calendar');
});

// laravel
Route::get('/laravel', function () {
    return view('welcome');
});
