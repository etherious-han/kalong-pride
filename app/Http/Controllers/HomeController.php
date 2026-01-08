<?php

namespace App\Http\Controllers;

use App\Models\HeroSlide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage with hero slides
     */
    public function index()
    {
        $heroSlides = HeroSlide::active()
            ->ordered()
            ->get();

        return view('home', compact('heroSlides'));
    }

    /**
     * Show about section
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show gallery section
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * Show members section
     */
    public function members()
    {
        return view('members');
    }
}
