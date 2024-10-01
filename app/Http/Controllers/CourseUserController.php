<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CourseUserController extends Controller
{
    /**
     * Show the form for creating a new course user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fetch all courses to display in the form
        $courses = Course::all();
        return view('admin.course-users.create', compact('courses'));
    }

    /**
     * Store a newly created course user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'course_id' => 'required|exists:courses,id',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        // Create the new user with course_user type
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'user_type' => 3, // Set the user_type to 3 for course users
            'course_id' => $validated['course_id'],
            'phone_number' => $validated['phone_number'],
            'address' => $validated['address'],
            'status' => 1, // Set status to active
        ]);

        return redirect()->route('course-users.index')->with('success', 'Course user created successfully!');
    }

    /**
     * Display a listing of course users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all users with user_type 3 (course users)
        $users = User::where('user_type', 3)->get();
        return view('admin.course-users.index', compact('users'));
    }

    /**
     * Show the form for editing a specific course user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fetch the specific course user and courses
        $user = User::findOrFail($id);
        $courses = Course::all();
        return view('admin.course-users.edit', compact('user', 'courses'));
    }

    /**
     * Update the specified course user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'course_id' => 'required|exists:courses,id',
            'phone_number' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed', // Validate password if provided
        ]);
    
        // Find the user and update the data
        $user = User::findOrFail($id);
    
        // Update the user details
        $user->first_name = $validated['first_name'];
        $user->last_name = $validated['last_name'];
        $user->email = $validated['email'];
        $user->course_id = $validated['course_id'];
        $user->phone_number = $validated['phone_number'];
        $user->address = $validated['address'];
    
        // Update password if provided
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }
    
        // Save the updated user
        $user->save();
    
        // Redirect back with a success message
        return redirect()->route('course-users.index')->with('success', 'Course user updated successfully!');
    }

    /**
     * Remove the specified course user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find and delete the user
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('course-users.index')->with('success', 'Course user deleted successfully!');
    }
}
