<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'Welcome')->name('home');

Route::get('/', [LandingPageController::class, 'home'])->name('landing.home');
Route::inertia('/test', 'Test')->name('landing.test');
Route::get('/about', [LandingPageController::class, 'about'])->name('landing.about');
Route::get('/announcement', [LandingPageController::class, 'announcement'])->name('landing.announcement');
Route::get('/services', [LandingPageController::class, 'services'])->name('landing.services');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');

// post for contact
Route::inertia('/faq', 'resources/Faq')->name('res.faq');
Route::inertia('/privacy-policy', 'resources/PrivacyPolicy')->name('res.privacy-policy');
Route::inertia('/user-guide', 'resources/UserGuide')->name('res.user-guide');
Route::inertia('/terms', 'resources/TermsOfService')->name('res.terms');
