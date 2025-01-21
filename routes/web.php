<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('todo', TodoController::class);
