<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PotionController;
use App\Http\Controllers\WizardController;

Route::apiResource("ingredients", IngredientController::class);

Route::get("potions/highest-magic-level-required", [PotionController::class, "highestLevelRequired"]);
Route::get("potions/lowest-magic-level-required", [PotionController::class, "lowestLevelRequired"]);
Route::get("potions/curatives", [PotionController::class, "curatives"]);
Route::get("potions/magic-level/{level}", [PotionController::class, "getPotionsByRequiredLevel"]);
Route::get("potions/search", [PotionController::class, "getPotionByName"]);
Route::get("potions/stats", [PotionController::class, "getStats"]);
Route::apiResource("potions", PotionController::class);

Route::apiResource("wizards", WizardController::class);