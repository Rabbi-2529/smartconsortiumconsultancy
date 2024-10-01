<?php

namespace App\Http\Controllers;

use App\Models\AboutCeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutCeoController extends Controller
{
    public function index()
    {
        $ceos = AboutCeo::all();
        return view('admin.about_ceos.index', compact('ceos'));
    }

    public function create()
    {
        return view('admin.about_ceos.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
        ]);
    
        // Check if there's already a CEO record
        $existingCeo = AboutCeo::first();
    
        // If an existing CEO record is found, redirect back with an error
        if ($existingCeo) {
            return redirect()->back()->with('error', 'A CEO record already exists. You can only create one.');
        }
    
        // Process the request data
        $data = $request->all();
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('ceo_images', 'public');
        }
    
        // Create the CEO record
        AboutCeo::create($data);
    
        // Redirect to the index page with success message
        return redirect()->route('about_ceos.index')->with('success', 'CEO information added successfully.');
    }
    public function edit(AboutCeo $aboutCeo)
    {
        return view('admin.about_ceos.edit', compact('aboutCeo'));
    }

    public function update(Request $request, AboutCeo $aboutCeo)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($aboutCeo->image) {
                Storage::disk('public')->delete($aboutCeo->image);
            }
            $data['image'] = $request->file('image')->store('ceo_images', 'public');
        }

        $aboutCeo->update($data);

        return redirect()->route('about_ceos.index')->with('success', 'CEO information updated successfully.');
    }

    public function destroy(AboutCeo $aboutCeo)
    {
        // Delete associated image
        if ($aboutCeo->image) {
            Storage::disk('public')->delete($aboutCeo->image);
        }

        $aboutCeo->delete();

        return response()->json(['message' => 'CEO deleted successfully'], 200);
    }
}
