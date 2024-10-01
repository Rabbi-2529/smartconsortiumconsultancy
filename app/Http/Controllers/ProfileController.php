<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User; 
use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\Course;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @param  Request  $request
     * @return View
     */

     public function admin(Request $request): View
     {
         $user = Auth::user();
     
         // Count of users
         $memberCount = User::where('user_type', 2)->count(); // Members
         $learnerCount = User::where('user_type', 3)->count(); // Learners
     
         // New learners in the last 7 days
         $last7Days = Carbon::now()->subDays(7);
         $newLearnersCount = User::where('user_type', 3)
                                  ->where('created_at', '>=', $last7Days)
                                  ->count();
     
         // Visitor counts
         $totalVisitorCount = Visitor::count();
         $newVisitorsCount = Visitor::where('visited_at', '>=', $last7Days)->count();
     
         // Badge value
         $badgeValue = number_format(($newVisitorsCount - ($totalVisitorCount - $newVisitorsCount)) / 1000, 2);
         $totalCoursesCount = Course::count();
     
         // Calculate learner-to-course ratio
         $courses = Course::withCount('learners')->get();
         $courseRatios = $courses->map(function ($course) {
             return [
                 'course_name' => $course->course_name,
                 'learner_count' => $course->learners_count,
                 'learner_ratio' => $course->learners_count / max(1, $course->learners_count), // Avoid division by zero
             ];
         })->toArray(); // Convert to array
     
         // Data for last 7 days
         $dates = [];
         $memberCounts = [];
         $learnerCounts = [];
         $visitorCounts = [];
     
         // Loop through the last 7 days
         for ($i = 6; $i >= 0; $i--) {
             $date = Carbon::now()->subDays($i);
             $dates[] = $date->format('Y-m-d');
     
             // Member counts for the date
             $memberCounts[] = User::where('user_type', 2)
                                   ->whereDate('created_at', $date)
                                   ->count();
     
             // Learner counts for the date
             $learnerCounts[] = User::where('user_type', 3)
                                    ->whereDate('created_at', $date)
                                    ->count();
     
             // Visitor counts for the date
             $visitorCounts[] = Visitor::whereDate('visited_at', $date)
                                        ->count();
         }
     
         // Prepare the view with the data
         return view('admin.index', compact(
             'user',
             'memberCount',
             'learnerCount',
             'newLearnersCount',
             'totalVisitorCount',
             'badgeValue',
             'newVisitorsCount',
             'totalCoursesCount',
             'courseRatios',
             'dates',
             'memberCounts',
             'learnerCounts',
             'visitorCounts'
         ));
     }
     
    }     