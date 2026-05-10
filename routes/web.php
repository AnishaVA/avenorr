<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Frontend\Home::class)->name('home');
Route::get('/about', App\Livewire\Frontend\About::class)->name('about');
Route::get('/it', App\Livewire\Frontend\ItPage::class)->name('it');
Route::get('/placement', App\Livewire\Frontend\PlacementPage::class)->name('placement');
Route::get('/contact', App\Livewire\Frontend\ContactPage::class)->name('contact');
// Route::get('/admin/dashboard',  App\Livewire\admin\Dashboard::class)->name('admin.dashboard');

