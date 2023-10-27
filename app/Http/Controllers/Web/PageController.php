<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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



    // About us section //

    public function aboutUs()
    {
        return view('web.pages.about-us');
    }

    public function contactUs()
    {
        return view('web.pages.contact-us');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contactMessage = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        $adminEmail = 'admin@gmail.com';
        Mail::to($adminEmail)->send(new ContactUS($contactMessage));

        // Redirect back with a success message or display a thank you message
        return redirect()->back()->with('success_message', 'Your message has been sent successfully! One of our team will get in touch with you shortly');
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