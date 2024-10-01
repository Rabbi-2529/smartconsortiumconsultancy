<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseTutorialController extends Controller
{
    // Display a listing of all courses
    public function index()
    {
        $courses = Course::all(); // Retrieve all courses
        return view('admin.course_tutorials.index', compact('courses'));
    }

    // Display tutorials for a specific course
    public function showTutorials($course_id)
    {
        $course = Course::findOrFail($course_id); // Retrieve the specific course
        $courseTutorials = CourseTutorial::where('course_id', $course_id)->get(); // Retrieve tutorials for the specific course

        return view('admin.course_tutorials.tutorials', compact('course', 'courseTutorials'));
    }

    // Show the form for creating a new tutorial
    public function create(Request $request)
    {
        $course_id = $request->query('course_id');
        $course = Course::findOrFail($course_id); // Fetch the course by ID

        return view('admin.course_tutorials.create', compact('course'));
    }

    // Store a newly created tutorial in storage
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:mp4,avi,mov,wmv,flv|max:20480', // Video file validation
        ]);

        // Store the file if present
        $filePath = $request->hasFile('file') ? $request->file('file')->store('course_tutorials', 'public') : null;

        $courseTutorial = CourseTutorial::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('course_tutorials.showTutorials', $request->course_id)
                         ->with('success', 'Tutorial added successfully');
    }

    // Show the form for editing the specified tutorial
    public function edit($id)
    {
        $courseTutorial = CourseTutorial::findOrFail($id);
        $courses = Course::all(); // Retrieve all courses to populate dropdown
        return view('admin.course_tutorials.edit', compact('courseTutorial', 'courses'));
    }

    // Update the specified tutorial in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:mp4,avi,mov,wmv,flv|max:20480', // Video file validation
        ]);

        $courseTutorial = CourseTutorial::findOrFail($id);

        if ($request->hasFile('file')) {
            // Handle file update
            $filePath = $request->file('file')->store('course_tutorials', 'public');
            $courseTutorial->file = $filePath;
        }

        $courseTutorial->course_id = $request->course_id;
        $courseTutorial->title = $request->title;
        $courseTutorial->description = $request->description;
        $courseTutorial->save();

        return redirect()->route('course_tutorials.showTutorials', $courseTutorial->course_id)
                         ->with('success', 'Tutorial updated successfully');
    }

    // Remove the specified tutorial from storage
    public function destroy($id)
    {
        $courseTutorial = CourseTutorial::findOrFail($id);
        $course_id = $courseTutorial->course_id;
        $courseTutorial->delete();

        return redirect()->route('course_tutorials.showTutorials', $course_id)
                         ->with('success', 'Tutorial deleted successfully');
    }
}
