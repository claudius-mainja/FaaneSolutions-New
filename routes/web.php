<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Livewire\JobSearch;
use App\Livewire\JobApplication;
use App\Livewire\ConsultationForm;
use App\Livewire\ContactForm;
use App\Livewire\NewsletterSignup;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('service.detail');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');
Route::get('/careers/{slug}', [PageController::class, 'careerDetail'])->name('career.detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogPost'])->name('blog.post');
