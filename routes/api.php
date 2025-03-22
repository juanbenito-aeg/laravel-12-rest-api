<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;

Route::apiResource("/ingredients", IngredientController::class);