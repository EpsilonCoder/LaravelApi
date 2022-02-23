<?php

use App\Http\Controllers\IdeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/idee', [IdeeController::class, 'index']);
