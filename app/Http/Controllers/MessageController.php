<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Display a listing of all courses
    public function index()
    {
        $courses = Course::all(); // Retrieve all courses
        return view('admin.messages.index', compact('courses'));
    }

    // Display messages for a specific course
    public function showMessages($course_id)
    {
        $course = Course::findOrFail($course_id); // Retrieve the specific course
        $messages = Message::where('course_id', $course_id)->get(); // Retrieve messages for the specific course

        return view('admin.messages.messages', compact('course', 'messages'));
    }

    // Show the form for creating a new message
    public function create(Request $request)
    {
        $course_id = $request->query('course_id');
        $course = Course::findOrFail($course_id); // Fetch the course by ID

        return view('admin.messages.create', compact('course'));
    }

    // Store a newly created message in storage
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'course_id' => $request->course_id,
            'message' => $request->message,
        ]);

        return redirect()->route('messages.showMessages', $request->course_id)
                         ->with('success', 'Message added successfully');
    }

    // Show the form for editing the specified message
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        $courses = Course::all(); // Retrieve all courses to populate dropdown
        return view('admin.messages.edit', compact('message', 'courses'));
    }

    // Update the specified message in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_id' => 'required|integer|exists:courses,id',
            'message' => 'required|string',
        ]);

        $message = Message::findOrFail($id);
        $message->course_id = $request->course_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('messages.showMessages', $message->course_id)
                         ->with('success', 'Message updated successfully');
    }

    // Remove the specified message from storage
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $course_id = $message->course_id;
        $message->delete();

        return redirect()->route('messages.showMessages', $course_id)
                         ->with('success', 'Message deleted successfully');
    }
}
