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
}