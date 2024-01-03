<?php

use App\Http\Controllers\Public\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get("/foundation/search", [GeneralController::class, 'searchFoundation']);
Route::post("/foundation/register", [GeneralController::class, 'registerFoundation']);
