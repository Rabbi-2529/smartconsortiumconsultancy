<?php

// app/Http/Controllers/AboutUsController.php
namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function our_vision_create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.our_vision', compact('aboutUs'));
    }

    public function our_promise_create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.our_promise', compact('aboutUs'));
    }

    public function our_goal_create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.our_goal', compact('aboutUs'));
    }

    public function why_different_create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.why_different', compact('aboutUs'));
    }

    public function why_choose_us_create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.aboutus.why_choose_us', compact('aboutUs'));
    }

    public function our_vision_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'our_vision' => 'required|string|max:65535', // Adjust validation rules as needed
        ]);

        // Check if there is an existing AboutUs instance
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            // Update the existing instance
            $aboutUs->update([
                'our_vision' => $validatedData['our_vision'],
            ]);
        }

        else {
            // Create a new AboutUs entry
            AboutUs::create([
                'our_vision' => $validatedData['our_vision'],
            ]);
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'About Us information saved successfully!');

    }


    public function our_promise_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'our_promise' => 'required|string|max:65535', // Adjust validation rules as needed
        ]);

        // Check if there is an existing AboutUs instance
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            // Update the existing instance
            $aboutUs->update([
                'our_promise' => $validatedData['our_promise'],
            ]);
        }

        else {
            // Create a new AboutUs entry
            AboutUs::create([
                'our_promise' => $validatedData['our_promise'],
            ]);
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'About Us information saved successfully!');
    }


    public function our_goal_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'our_goal' => 'required|string|max:65535', // Adjust validation rules as needed
        ]);

        // Check if there is an existing AboutUs instance
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            // Update the existing instance
            $aboutUs->update([
                'our_goal' => $validatedData['our_goal'],
            ]);
        }

        else {
            // Create a new AboutUs entry
            AboutUs::create([
                'our_goal' => $validatedData['our_goal'],
            ]);
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'About Us information saved successfully!');
    }


    public function why_different_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'why_different' => 'required|string|max:65535', // Adjust validation rules as needed
        ]);

        // Check if there is an existing AboutUs instance
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            // Update the existing instance
            $aboutUs->update([
                'why_different' => $validatedData['why_different'],
            ]);
        }

        else {
            // Create a new AboutUs entry
            AboutUs::create([
                'why_different' => $validatedData['why_different'],
            ]);
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'About Us information saved successfully!');
    }


    public function why_choose_us_store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'why_choose_us' => 'required|string|max:65535', // Adjust validation rules as needed
        ]);

        // Check if there is an existing AboutUs instance
        $aboutUs = AboutUs::first();

        if ($aboutUs) {
            // Update the existing instance
            $aboutUs->update([
                'why_choose_us' => $validatedData['why_choose_us'],
            ]);
        }

        else {
            // Create a new AboutUs entry
            AboutUs::create([
                'why_choose_us' => $validatedData['why_choose_us'],
            ]);
        }

        // Redirect or return a response
        return redirect()->back()->with('success', 'About Us information saved successfully!');
    }
}
