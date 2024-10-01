<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseFile;
use Illuminate\Http\Request;

class CourseFileController extends Controller
{
    // Display a listing of all courses
    public function index()
    {
        $courses = Course::all(); // Retrieve all courses
        return view('admin.course_files.index', compact('courses'));
    }

    // Display files for a specific course
    public function showFiles($course_id)
    {
        $course = Course::findOrFail($course_id); // Retrieve the specific course
        $courseFiles = CourseFile::where('course_id', $course_id)->get(); // Retrieve files for the specific course

        return view('admin.course_files.files', compact('course', 'courseFiles'));
    }

    // Show the form for creating a new file
    public function create(Request $request)
    {
        $course_id = $request->query('course_id');
        $course = Course::findOrFail($course_id); // Fetch the course by ID

        return view('admin.course_files.create', compact('course'));
    }

    // Store a newly created file in storage
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'file' => 'required|file',
        ]);

        // Store the file and create a record in CourseFile
        $filePath = $request->file('file')->store('course_files', 'public');

        $courseFile = CourseFile::create([
            'course_id' => $request->course_id,
            'file' => $filePath,
        ]);

        return redirect()->route('course_files.showFiles', $request->course_id)
                         ->with('success', 'File uploaded successfully');
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $courseFile = CourseFile::findOrFail($id);
        $courses = Course::all(); // Retrieve all courses to populate dropdown
        return view('admin.course_files.edit', compact('courseFile', 'courses'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'file' => 'nullable|file',
        ]);

        $courseFile = CourseFile::findOrFail($id);

        if ($request->hasFile('file')) {
            // Handle file update
            $filePath = $request->file('file')->store('course_files', 'public');
            $courseFile->file = $filePath;
        }

        $courseFile->course_id = $request->course_id;
        $courseFile->save();

        return redirect()->route('course_files.showFiles', $courseFile->course_id)
                         ->with('success', 'File updated successfully');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $courseFile = CourseFile::findOrFail($id);
        $course_id = $courseFile->course_id;
        $courseFile->delete();

        return redirect()->route('course_files.showFiles', $course_id)
                         ->with('success', 'File deleted successfully');
    }
}
