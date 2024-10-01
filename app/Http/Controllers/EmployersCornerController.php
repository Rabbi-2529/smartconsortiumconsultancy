<?php

namespace App\Http\Controllers;

use App\Models\EmployersCorner;
use Illuminate\Http\Request;

class EmployersCornerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employersCorners = EmployersCorner::all();
        return view('admin.employers_corner.index', compact('employersCorners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employers_corner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $request->validate([
        'cv' => 'mimes:pdf,doc,docx|max:2048',
    ]);

    $cvPath = self::imageUpload($request->cv, 'upload/employers-corner-files/');

    EmployersCorner::create([
        'cv' => $cvPath,
        'short_video_resume' => $request->short_video_resume ?? null,
        'detailed_video_resume' => $request->detailed_video_resume ?? null,
    ]);

    return to_route('employers_corners.index')->with('Employers Corner added successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(EmployersCorner $employersCorner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployersCorner $employersCorner)
    {
        return view('admin.employers_corner.edit', compact('employersCorner'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, EmployersCorner $employersCorner)
{
    $request->validate([
        'cv' => 'nullable|mimes:pdf,doc,docx|max:2048', // Allow null value
    ]);

    // If a new CV file is uploaded, handle the file upload; otherwise, keep the existing file path
    if ($request->hasFile('cv')) {
        // Optionally delete the existing file if needed
        if (file_exists($employersCorner->cv)) {
            unlink($employersCorner->cv);
        }
        $cvPath = self::imageUpload($request->cv, 'upload/employers-corner-files/');
    } else {
        $cvPath = $employersCorner->cv; // Keep the existing CV path if no new file is uploaded
    }

    // Update the resource with the new or existing data
    $employersCorner->update([
        'cv' => $cvPath,
        'short_video_resume' => $request->short_video_resume ?? $employersCorner->short_video_resume,
        'detailed_video_resume' => $request->detailed_video_resume ?? $employersCorner->detailed_video_resume,
    ]);

    return to_route('employers_corners.index')->with('success', 'Employers Corner updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployersCorner $employersCorner)
    {
        if (file_exists($employersCorner->cv)) {
            unlink($employersCorner->cv);
        }
        $employersCorner->delete();
        return to_route('employers_corners.index')->with('success', 'Employers Corner deleted successfully.');
    }

    private static function imageUpload($file, $directory)
    {
        $fileName = rand(10000, 50000) . '.' . $file->getClientOriginalExtension();
        $file->move($directory, $fileName);
        return $directory . $fileName;
    }
}
