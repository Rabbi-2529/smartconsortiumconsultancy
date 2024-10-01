<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class AdminPhotoGalleryController extends Controller
{
    // public function index()
    // {
    //     $photos = PhotoGallery::all();
    //     return view('photo_gallery.index', compact('photos'));
    // }

    public function photo_gallery_create()
    {
        $photos = PhotoGallery::all();
        return view('admin.photo_gallery.photo_gallery', compact('photos'));
    }

public function photo_gallery_store(Request $request)
{
    // Validate the request
    $request->validate([
        'photo_url' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        'caption' => 'nullable|string|max:255',
    ]);

    try {
        // Handle file upload and save photo
        if ($request->hasFile('photo_url')) {
            $photoPath = $request->file('photo_url')->store('photos', 'public');
        } else {
            return redirect()->back()->withErrors(['photo_url' => 'Photo file is required']);
        }

        // Create a new PhotoGallery entry
        PhotoGallery::create([
            'photo_url' => $photoPath,
            'caption' => $request->caption,
        ]);

        return redirect()->back()->with('success', 'Photo added successfully!');
    } catch (\Exception $e) {
        // Catch any exception and redirect with error
        return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }
}

    public function photo_gallery_destroy(PhotoGallery $photoGallery)
    {
        // $photoGallery->delete();
        // return redirect()->route('photo_galleries.index')->with('success', 'Photo deleted successfully!');

        // Optionally delete the photo file from storage
        \Storage::disk('public')->delete($photoGallery->photo_url);

        $photoGallery->delete();
        return redirect()->back()->with('success', 'Photo deleted successfully!');
    }
       public function photo_gallery_edit($id)
    {
        // Retrieve the photo by its ID
        $photo = PhotoGallery::findOrFail($id);

        // Pass the photo to the edit view
        return view('admin.photo_gallery.edit', compact('photo'));
    }

    public function photo_gallery_update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'photo_url' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'caption' => 'nullable|string|max:255',
        ]);

        try {
            // Find the existing photo gallery entry
            $photoGallery = PhotoGallery::findOrFail($id);

            // Handle file upload if a new photo is provided
            if ($request->hasFile('photo_url')) {
                // Delete the old photo file from storage
                \Storage::disk('public')->delete($photoGallery->photo_url);

                // Store the new photo file
                $photoPath = $request->file('photo_url')->store('photos', 'public');
                $photoGallery->photo_url = $photoPath;
            }

            // Update the caption
            $photoGallery->caption = $request->caption;

            // Save the updated photo gallery entry
            $photoGallery->save();

            return redirect()->back()->with('success', 'Photo updated successfully!');
        } catch (\Exception $e) {
            // Log the error message for debugging purposes
            \Log::error('Photo Update Error: ' . $e->getMessage());

            // Redirect with a user-friendly error message
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the photo. Please try again.']);
        }
    }

}
