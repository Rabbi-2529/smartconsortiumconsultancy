<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('admin.courses.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher_name' => 'required|string|max:255',
            'course_teacher_image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'course_price' => 'required|numeric',
            'course_description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'deadline_date' => 'nullable|date',
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('course_teacher_image')) {
            $file = $request->file('course_teacher_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['course_teacher_image'] = $filename;
        }

        Course::create($data);

        return redirect()->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    // Display the specified resource.
    public function show(Course $course)
    {
        return view('admin.courses.show', compact('course'));
    }

    // Show the form for editing the specified resource.
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'course_teacher_name' => 'required|string|max:255',
            'course_teacher_image' => 'nullable|string|max:255',
            'course_price' => 'required|numeric',
            'course_description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'deadline_date' => 'nullable|date',
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('course_teacher_image')) {
            $file = $request->file('course_teacher_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $data['course_teacher_image'] = $filename;
        }

        $course->update($data);

        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}
