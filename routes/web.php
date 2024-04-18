<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;

Route::get('/',[HomeController::class,'showHomeView']);

Route::get('/notes/{id}', [NotesController::class, 'show'])->name('notes.show');
Route::get('/notes', [NotesController::class, 'index']);
Route::post('/notes/store', [NotesController::class, 'store'])->name('notes.store');