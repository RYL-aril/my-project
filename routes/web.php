<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'pages.welcome')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/rules', 'pages.rules')->name('rules');

// Auth static pages (Live views rendered statically)
Route::view('/login', 'pages.auth.login')->name('login');
Route::view('/register', 'pages.auth.register')->name('register');
Route::view('/password/reset', 'pages.auth.reset-password')->name('password.reset');

// Existing dynamic pages
Route::view('/books', 'pages.guest.book-explorer')->name('books.index');
Route::view('/books/{id}', 'pages.guest.book-detail')->name('books.show');

// Placeholder static pages for navigation (will 404 or create later)
Route::view('/categories', 'categories')->name('categories');
Route::view('/new-arrivals', 'new-arrivals')->name('new-arrivals');
Route::view('/popular', 'popular')->name('popular');
Route::view('/fines', 'fines')->name('fines');

// Admin/Member dashboard placeholders (static for now)
Route::view('/admin/dashboard', 'pages.admin.dashboard')->name('admin.dashboard');
Route::view('/member/dashboard', 'pages.member.dashboard')->name('member.dashboard');
Route::view('/admin/books', 'pages.admin.books.index')->name('admin.books.index');
Route::view('/admin/users', 'pages.admin.users.index')->name('admin.users.index');
Route::view('/profile', 'pages.profile')->name('profile');

// Static placeholders
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

