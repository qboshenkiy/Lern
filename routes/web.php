<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\MessageController;

    Route::get('/', [BasicController::class, 'index'])->name('home');
    Route::get('/about', [BasicController::class, 'about'])->name('about');
    Route::get('/contact', [BasicController::class, 'contact'])->name('contact');
    Route::post('/contact/message', [BasicController::class, 'submitContactMessage'])->name('contact.submit');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::get('/messages/{id}/edit', [MessageController::class, 'edit'])->name('messages.edit');
    Route::put('/messages/{id}', [MessageController::class, 'update'])->name('messages.update');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
