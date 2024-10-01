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
    $message = $videos->isEmpty() ? 'No videos available.' : null; // Check if there are videos
    return view('admin.videogallery.index', compact('videos', 'message'));
}

    // Show the form for creating a new video
public function create()
{
    $video = VideoGallery::all(); // Retrieve all videos
    return view('admin.videogallery.create', compact('video')); // Pass videos to the view
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

        VideoGallery::create([
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

        // Update only if the video URL is provided
        if ($request->filled('video_url')) {
            $video->video_url = $request->video_url;
            $video->video_thumbnail = $video->generateThumbnail($request->video_url);
        }

        // Update caption if provided
        if ($request->filled('caption')) {
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
