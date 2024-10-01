<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    // Display a listing of the videos
    public function index()
    {
        $videos = VideoGallery::all();
        return view('admin.videogallery.index', compact('videos'));
    }

    // Show the form for creating a new video
    public function create()
    {
        return view('admin.videogallery.create');
    }

    // Store a newly created video in storage
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'video_url' => 'required|url',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $videoGallery = new VideoGallery();
        $thumbnailPath = $videoGallery->generateThumbnail($request->video_url);

        $video = VideoGallery::create([
            'video_url' => $request->video_url,
            'video_thumbnail' => $thumbnailPath,
            'caption' => $request->caption,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video added successfully.');
    }

    // Show the form for editing the specified video
    public function edit($id)
    {
        $video = VideoGallery::findOrFail($id);
        return view('admin.videogallery.edit', compact('video'));
    }

    // Update the specified video in storage
    public function update(Request $request, $id)
    {
        $video = VideoGallery::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'video_url' => 'nullable|url',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->has('video_url')) {
            $video->video_url = $request->video_url;
            $video->video_thumbnail = $video->generateThumbnail($request->video_url);
        }

        if ($request->has('caption')) {
            $video->caption = $request->caption;
        }

        $video->save();

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    // Remove the specified video from storage
    public function destroy($id)
    {
        $video = VideoGallery::findOrFail($id);
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video deleted successfully.');
    }
}
