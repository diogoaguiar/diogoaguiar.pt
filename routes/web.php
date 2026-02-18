<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.public.home'))->name('home');

Route::get('/about', fn () => redirect('/#about'))->name('about');
Route::get('/services', fn () => redirect('/#services'))->name('services');
Route::get('/contact', fn () => redirect('/#contact'))->name('contact');
