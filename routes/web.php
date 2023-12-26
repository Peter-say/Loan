<?php

use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\loanApplicationController;
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

    Route::get('apply-now', [loanApplicationController::class, "applyNow"])->name("apply-now");
    Route::post('send-application', [loanApplicationController::class, "sendApplication"])->name("send-application");

    // Loan route section //
    Route::get('business-loan', [PageController::class, "businessLoan"])->name("business-loan");
    Route::get('car-loan', [PageController::class, "carLoan"])->name("car-loan");
    Route::get('educational-loan', [PageController::class, "educationalLoan"])->name("educational-loan");
    Route::get('home-loan', [PageController::class, "homeLoan"])->name("home-loan");
    Route::get('agric-loan', [PageController::class, "agric"])->name("agric-loan");


    Route::prefix('mortgage')->as('mortgage.')->group( function () {
        Route::get('/', [PageController::class, "mortgageLoan"]);
        Route::get('/conventional-loan', [PageController::class, "conventionalLoan"])->name('conventional-loan');
        Route::get('/jumb-loan', [PageController::class, "jumboLoan"])->name('jumbo-loan');
        Route::get('/fha-loan', [PageController::class, "fhaLoan"])->name('fha-loan');
        Route::get('/va-loan', [PageController::class, "vaLoan"])->name('va-loan');
        Route::get('/usda-loan', [PageController::class, "usadLoan"])->name('usda-loan');
    });

    // About Us section //
    Route::get('about-us', [PageController::class, "aboutUS"])->name("about-us");
    Route::get('contact-us', [PageController::class, "contactUS"])->name("contact-us");
    Route::post('/contact-us/submit' , [PageController::class, 'submitContactForm'])->name('contact-us.submit');
    Route::get('faq', [PageController::class, "faq"])->name("faq");

});