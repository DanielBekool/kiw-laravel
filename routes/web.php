<?php

use Livewire\Volt\Volt;

Volt::route('/', 'users.index');

Route::get('/home', function () {
    return view('home');
});


