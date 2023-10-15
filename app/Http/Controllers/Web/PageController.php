<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function way()
    {
        return view('web.pages.way');
    }

    public function service()
    {
        return view('web.services.index');
    }

    public function image()
    {
        return view('web.services.image');
    }

    public function single()
    {
        return view('web.services.single');
    }


    public function team()
    {
        return view('web.pages.team');
    }

    public function testimonial()

    {
        return view('web.pages.testimonial');
    }

    public function applyNow()
    {
        return view('web.pages.apply-now');
    }

    public function sendApplication()
    {
        // apply now logic goes here
    }

    // About us section //

    public function aboutUs()
    {
        return view('web.pages.about-us');
    }

    public function contactUs()
    {
        return view('web.pages.contact-us');
    }

    public function faq()
    {
        return view('web.pages.faq');
    }


    // Loan section //

    public function carLoan()
    {
        return view('web.pages.car-loan');
    }

    public function homeLoan()
    {
        return view('web.pages.home-loan');
    }

    public function businessLoan()
    {
        return view('web.pages.business-loan');
    }

    public function educationalLoan()
    {
        return view('web.pages.educational-loan');
    }
}
