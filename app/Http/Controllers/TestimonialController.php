<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function mainPage()
    {
        $testimonials = [
            ['location' => 'Clearwater, FL', 'role' => 'Business Owner', 'message' => 'We partnered with Willow Springs Capital...'],
            ['location' => 'Fort Lauderdale, FL', 'role' => 'Real Estate Investor', 'message' => 'Working with Willow Springs Capital...'],
            ['location' => 'Florida', 'role' => 'Real Estate Designer', 'message' => 'Working with Willow Springs Capital was a great experience.'],
            // Add more testimonials here
        ];

        return view('landing', compact('testimonials'));
    }
}
