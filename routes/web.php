<?php

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [IndexController::class, 'index']);

Route::prefix('web')->as('web.')->group(function () {
    Route::get('how-it-works', [PageController::class, "way"])->name("ways");
    Route::get('how-it-works', [PageController::class, "way"])->name("ways");
    Route::get('services', [PageController::class, "service"])->name("services");
    Route::get('services-image', [PageController::class, "image"])->name("services-image");
    Route::get('service-details', [PageController::class, "single"])->name("single");
    Route::get('team', [PageController::class, "team"])->name("team");
    Route::get('testimonial', [PageController::class, "testimonial"])->name("testimonial");

});