<?php

use Livewire\Volt\Volt;

Volt::route('/', 'users.index');

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil-perusahaan', function () {
    return view('tentang-profil');
});


