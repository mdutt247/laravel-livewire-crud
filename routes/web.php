<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Contact;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('contact', Contact::class)->name('contact');
});
