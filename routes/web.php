<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/dashboard', 'menu_left.dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/users', 'menu_left.users')->middleware(['auth', 'verified'])->name('users');

Route::view('/posts', 'menu_left.posts')->middleware(['auth', 'verified'])->name('posts');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
