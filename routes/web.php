<?php

use Illuminate\Support\Facades\Route;
use App\Mail\UserWelcomeMail;
use App\Http\Controllers\WelkomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\AdminController;


Route::get('/',[App\Http\Controllers\WelkomeController::class,'index'])->name('welkome.index');

Route::get('/blog',[App\Http\Controllers\BlogController::class,'index'])->name('blog.index');

Route::get('/about',[App\Http\Controllers\AboutController::class,'show'])->name('about.show');

Route::get('/blog/{post:slug}',[App\Http\Controllers\BlogController::class,'show'])->name('blog.show');

Route::get('/blog/{post}/edit',[App\Http\Controllers\BlogController::class,'edit'])->name('blog.edit');

Route::put('/blog/{post}/update',[App\Http\Controllers\BlogController::class,'update'])->name('blog.update');

Route::delete('/blog/{post}/delete',[App\Http\Controllers\BlogController::class,'delete'])->name('blog.delete');

Route::get('/blog/create',[App\Http\Controllers\BlogController::class,'create'])->name('blog.create')->middleware('auth');

Route::post('/blog/store',[App\Http\Controllers\BlogController::class,'store'])->name('blog.store');

Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'index'])->name('dashboard');

Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');

// Email
Route::post('/send-email',[App\Http\Controllers\ContacController::class,'sendEmail'])->name('send.email');
