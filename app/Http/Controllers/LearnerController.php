<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseFile;
use App\Models\CourseTutorial;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class LearnerController extends Controller
{
    /**
     * Show the tutorials for the courses taken by the specified learner.
     *
     * @param int $learner_id
     * @return \Illuminate\Http\Response
     */
    public function tutorials($learner_id)
    {
        // Fetch the learner and ensure they exist
        $learner = User::findOrFail($learner_id);

        // Ensure the user_type is 3 (learner)
        if ($learner->user_type != 3) {
            return redirect()->route('learners.index')
                             ->with('error', 'Invalid learner.');
        }

        // Fetch courses for the learner
        $courseIds = explode(',', $learner->course_id); // Assuming course_id is a comma-separated list
        
        // Fetch tutorials for those courses
        $tutorials = CourseTutorial::whereIn('course_id', $courseIds)->get();

        // Pass the learner and tutorials to the view
        return view('admin.learners.tutorials', compact('learner', 'tutorials'));
    }

    /**
     * Show the tutorials for a specific course.
     *
     * @param int $course_id
     * @return \Illuminate\Http\Response
     */
    public function show($course_id)
    {
        $course = Course::findOrFail($course_id);
        $tutorials = CourseTutorial::where('course_id', $course_id)->get();

        return view('admin.learners.show', compact('course', 'tutorials'));
    }

    public function file($learner_id)
    {
        // Fetch the learner and ensure they exist
        $learner = User::findOrFail($learner_id);

        // Ensure the user_type is 3 (learner)
        if ($learner->user_type != 3) {
            return redirect()->route('learners.index')
                             ->with('error', 'Invalid learner.');
        }

        // Fetch courses for the learner
        $courseIds = explode(',', $learner->course_id); // Assuming course_id is a comma-separated list
        
        // Fetch tutorials for those courses
        $file = CourseFile::whereIn('course_id', $courseIds)->get();

        // Pass the learner and tutorials to the view
        return view('admin.learners.file', compact('learner', 'file'));
    }

    public function show_file($course_id)
    {
        $course = Course::findOrFail($course_id);
        $files = CourseFile::where('course_id', $course_id)->get();
    
        return view('admin.learners.show_file', compact('course', 'files'));
    }


    public function messages($learner_id)
    {
        // Fetch the learner and ensure they exist
        $learner = User::findOrFail($learner_id);
    
        // Ensure the user_type is 3 (learner)
        if ($learner->user_type != 3) {
            return redirect()->route('learners.index')
                             ->with('error', 'Invalid learner.');
        }
    
        // Fetch courses for the learner
        $courseIds = explode(',', $learner->course_id); // Assuming course_id is a comma-separated list
        
        // Fetch messages for those courses
        $messages = Message::whereIn('course_id', $courseIds)->get();
    
        // Calculate the number of new messages today
        $newMessagesToday = $messages->filter(function ($message) {
            return $message->created_at->isToday();
        })->count();
    
        // Pass the learner, messages, and newMessagesToday to the view
        return view('admin.learners.messages', compact('learner', 'messages', 'newMessagesToday'));
    }

            public function show_messages($course_id)
            {
                $course = Course::findOrFail($course_id);
                $messages = Message::where('course_id', $course_id)->get();

                return view('admin.learners.show_messages', compact('course', 'messages'));
            }

}
