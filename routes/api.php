<?php

use App\Http\Controllers\ApplicationStatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', [ApplicationStatusController::class, 'getApplicationStatus']);
