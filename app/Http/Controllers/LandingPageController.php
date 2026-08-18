<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class LandingPageController extends Controller
{
    // Landing page pages: Home, About, Services, Announcements, and Contact.
    // These currently return Inertia pages.
    public function home(): Response
    {
        return Inertia::render('landing/Home');
    }

    public function about(): Response
    {
        return Inertia::render('landing/About');
    }

    public function services(): Response
    {
        return Inertia::render('Welcome');
    }

    public function announcement(): Response
    {
        // can query announcement per brgy or whole municipal
        return Inertia::render('Welcome');
    }

    public function contact(): Response
    {
        return Inertia::render('Welcome');
    }
}
