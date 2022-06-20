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

Auth::routes();

Route::get('/',[WelkomeController::class,'index'])->name('welkome.index');

Route::get('/blog',[BlogController::class,'index'])->name('blog');

Route::get('/about',[AboutController::class,'show'])->name('about');

Route::get('/blog/{post:slug}',[BlogController::class,'show'])->name('blog.show');

Route::get('/blog/{post}/edit',[BlogController::class,'edit'])->name('blog.edit');

Route::put('/blog/{post}/update',[BlogController::class,'update'])->name('blog.update');

Route::delete('/blog/{post}/delete',[BlogController::class,'delete'])->name('blog.delete');

Route::get('/create/blog',[BlogController::class,'create'])->name('blog.create')->middleware('auth');

Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

// Email
Route::post('/send-email',[ContacController::class,'sendEmail'])->name('send.email');
