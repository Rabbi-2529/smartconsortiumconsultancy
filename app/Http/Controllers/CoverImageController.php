<?php

namespace App\Http\Controllers;

use App\Models\CoverImage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CoverImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coverImages = CoverImage::all();
        return view('admin.cover_images.index', compact('coverImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cover_images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|string|unique:cover_images',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image size must not exceed 2MB.',
        ]);
    
        $imagePath = $request->file('image') ? self::imageUpload($request->image, 'upload/cover-images/') : 'upload/dummy.jpg';
    
        CoverImage::create([
            'page_name' => $request->page_name,
            'image' => $imagePath,
        ]);
    
        return to_route('cover_images.index')->with('success', 'Cover Image added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CoverImage $coverImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CoverImage $coverImage)
    {
        return view('admin.cover_images.edit', compact('coverImage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CoverImage $coverImage)
    {
        $request->validate([
            'page_name' => 'required|string|unique:cover_images,page_name,' . $coverImage->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image size must not exceed 2MB.',
        ]);
    
        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            $imagePath = self::imageUpload($request->image, 'upload/cover-images/');
        } else {
            $imagePath = $coverImage->image; // Keep the old image if not updating
        }
    
        // Update the cover image record
        $coverImage->update([
            'page_name' => $request->page_name,
            'image' => $imagePath,
        ]);
    
        return to_route('cover_images.index')->with('success', 'Cover Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CoverImage $coverImage)
    {
        if (file_exists($coverImage->image)) {
            unlink($coverImage->image);
        }
        $coverImage->delete();
        return to_route('cover_images.index')->with('success', 'Cover Image deleted successfully.');
    }

    private static function imageUpload($image, $directory)
    {
        $imageExtension = $image->getClientOriginalExtension();
        $imageName = rand(10000, 50000) . '.' . $imageExtension;
        $image->move($directory, $imageName);
        return $directory . $imageName;
    }
}