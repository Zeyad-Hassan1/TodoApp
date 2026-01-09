<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;


Route::resource('tasks' , taskcontroller::class);
Route::patch('/tasks/{task}/complete' , [taskcontroller::class , 'complete'])->name('tasks.complete');
Route::patch('/tasks/{task}/undo', [taskcontroller::class, 'undo'])->name('tasks.undo');
