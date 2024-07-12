<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(TodoController::class)->middleware(['auth'])->group(function(){
    Route::get('/todos', 'index')->name('todos.index');
    Route::get('/todos/completed', 'getCompletedTodos')->name('todos.completed');
    Route::get('/todos/daily', 'getDailyTodos')->name('todos.daily');
    Route::get('/todos/show/{todo}', 'show')->name('todos.show');
    Route::get('/todos/create', 'create')->name('todos.create');
    Route::post('/todos/store', 'store')->name('todos.store');
    Route::get('/todos/edit/{todo}', 'edit')->name('todos.edit');
    Route::put('/todos/update/{todo}', 'update')->name('todos.update');
    Route::delete('/todos/destroy/{todo}', 'destroy')->name('todos.destroy');
    Route::put('/todos/done/{todo}', 'done')->name('todos.done');
});
require __DIR__ . '/auth.php';