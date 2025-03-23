<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Portfolio Website', 'description' => 'Built using Laravel and Tailwind CSS'],
            ['title' => 'E-commerce Store', 'description' => 'Online shop using PHP and Laravel'],
        ];

        return view('portfolio.index', compact('projects'));
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function sendMessage(Request $request)
    {
        return back()->with('success', 'Your message has been sent!');
    }

}


