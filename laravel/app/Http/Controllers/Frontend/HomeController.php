<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the frontend home page.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Show the frontend about page.
     */
    public function about(): View
    {
        return view('pages.about');
    }
}
