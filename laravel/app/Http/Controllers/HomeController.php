<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function root(): View
    {
        return view('pages.home');
    }
}
