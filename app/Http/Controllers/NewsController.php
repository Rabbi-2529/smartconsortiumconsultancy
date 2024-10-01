<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image') ? self::imageUpload($request->image, 'upload/news-images/') : 'upload/dummy.jpg';

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('news.index')->with('success', 'News added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->file('image')) {
            if (file_exists($news->image)) {
                unlink($news->image);
            }
            $imagePath = self::imageUpload($request->image, 'upload/news-images/');
        } else {
            $imagePath = $news->image;
        }

        $news->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return to_route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if (file_exists($news->image)) {
            unlink($news->image);
        }
        $news->delete();
        return to_route('news.index')->with('success', 'News deleted successfully.');
    }

    private static function imageUpload($image, $directory)
    {
        $imageExtension = $image->getClientOriginalExtension();
        $imageName = rand(10000, 50000) . '.' . $imageExtension;
        $image->move($directory, $imageName);
        return $directory . $imageName;
    }
}
