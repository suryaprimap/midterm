<?php

use App\Models\Contact;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;

Route::get('/registration', [AuthController::class, 'showRegistration'])->name('registration.show');
Route::post('/registration/submit', [AuthController::class, 'submitRegistration'])->name('registration.submit');

Route::get('/', [DashboardController::class, 'show'])->name('dashboard.show');

Route::get('/dashboard/add', [DashboardController::class, 'add'])->name('dashboard.add');

Route::post('/dashboard/submit', [DashboardController::class,'submit'])->name('dashboard.submit');

Route::get('/dashboard/edit/{id}', [DashboardController::class,'edit'])->name('dashboard.edit');

Route::post('/dashboard/update/{id}', [DashboardController::class,'update'])->name('dashboard.update');

Route::post('/dashboard/delete/{id}', [DashboardController::class,'delete'])->name('dashboard.delete');

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contacts', ['title' => 'Contact']);
});

Route::get('/messages', [ContactController::class, 'show'])->name('contact.show');
