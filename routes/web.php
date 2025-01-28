<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/next', function () {
    $persons = [
        ["name" => "John","surname" => "Joe","age" => 30,"id" => 1],
        ["name" => "Jack","surname" => "Doe","age" => 21,"id" => 2],
        ["name" => "Michel","surname" => "Ban","age" => 28,"id" => 3]
    ];
    return view("next.index",["greeting" => "hello","persons" => $persons]);
});

Route::get('/next/{id}', function ($id) {
    return view('next.person',["id" => $id]);
});
