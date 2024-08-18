<?php

use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;


Route::get('/undangan/{kpd}', [WeddingController::class, 'showInvitation']);
