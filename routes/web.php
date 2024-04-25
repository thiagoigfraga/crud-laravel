<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;

Route::get('/',[HomeController::class,'showHomeView'])->name('home');

Route::get('/notes/{id}', [NotesController::class, 'show'])->name('notes.uniqueview');
Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
Route::post('/delete', [NotesController::class, 'deleteById'])->name('notes.deleteById');
Route::post('/notes/store', [NotesController::class, 'store'])->name('notes.store');