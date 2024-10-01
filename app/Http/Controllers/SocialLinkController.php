<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialLinks = SocialLink::all();
        return view("admin.social_links.index", compact('socialLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.social_links.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:social_links',
            'link' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image') ? self::imageUpload($request->image, 'upload/social-link-images/') : 'upload/dummy.jpg';

        SocialLink::create([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return to_route('social_links.index')->with('success', 'Social Link added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialLink $socialLink)
    {
        return view("admin.social_links.edit",compact('socialLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialLink $socialLink)
    {
        $request->validate([
            'title' => 'required|string|unique:social_links,title,' . $socialLink->id,
            'link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->file('image')) {
            if (file_exists($socialLink->image)) {
                unlink($socialLink->image);
            }
            $imagePath = self::imageUpload($request->image, 'upload/social-link-images/');
        } else {
            $imagePath = $socialLink->image;
        }

        $socialLink->update([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $imagePath,
        ]);

        return to_route('social_links.index')->with('success', 'Social Link updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialLink $socialLink)
    {
        if (file_exists($socialLink->image)) {
            unlink($socialLink->image);
        }
        $socialLink->delete();
        return to_route('social_links.index')->with('success', 'Social Link deleted successfully.');
    }

    private static function imageUpload($image, $directory)
    {
        $imageExtension = $image->getClientOriginalExtension();
        $imageName = rand(10000, 50000) . '.' . $imageExtension;
        $image->move($directory, $imageName);
        return $directory . $imageName;
    }
}
