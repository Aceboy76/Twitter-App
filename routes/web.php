<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;


//terms
Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');

//dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

//ideas
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

//comment
Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');