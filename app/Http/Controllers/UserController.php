<?php

namespace App\Http\Controllers;
use App\Models\PhotoGallery;
use App\Models\AboutUs;
use App\Models\AboutCeo;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\ProductAndService;
use App\Models\News;
use App\Models\Team;
use App\Models\Faq;
use App\Models\SocialLink;
use App\Models\Course;
use App\Models\UpcomingEvent;
use App\Models\VideoGallery;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\JobOpportunity;
use App\Models\JobApplicant;
use App\Models\Ad;
use App\Mail\ContactUsMail;
use App\Mail\JobApplicationSubmitted;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
public function index() {
    $user = Auth::user();
    $faqs = Faq::latest()->take(5)->get();
    $upcomingEvents = UpcomingEvent::all();
    $latestEvent = UpcomingEvent::latest()->first();
    $news = News::latest()->take(3)->get(); // Fetch latest news

    $products = ProductAndService::latest()->take(3)->get(); // Fetch last 3 products
    return view('index', compact('user', 'faqs', 'latestEvent', 'news', 'products'));
}
        public function productDetails($id)
    {
        // Fetch the product details by ID
        $product = ProductAndService::findOrFail($id);
        
        // Return the product details view
        return view('product-details', compact('product'));
    }

    public function videoGallery()
    {
        $videos = VideoGallery::paginate(9); // Retrieve videos with pagination, 10 per page
    
        return view('video-gallery', compact('videos')); // Pass videos to the view
    }
    public function News()
    {
        $news = News::paginate(6); // Adjust the number of news items per page as needed
    
        return view("news", compact('news'));
    }

    public function newsDetails($id){
        $newsDetails = News::findOrFail($id);
        return view('news-details',compact('newsDetails'));
    }
   public function photoGallery()
    {
        // Change this to paginate, e.g., 9 photos per page
        $photos = PhotoGallery::paginate(9); 
        $socialLinks = SocialLink::all();
        return view("photo_gallery", compact('photos', 'socialLinks'));
    }
    
public function aboutUs()
{
    // Fetch the first record for About Us
    $aboutus = AboutUs::first();

    // Fetch all team members
    $teamMembers = Team::all();

    // Fetch all upcoming events
    $upcomingEvents = UpcomingEvent::all();

    // Fetch the latest event (if you need just one)
    $latestEvent = UpcomingEvent::latest()->first();

    // Pass the data to the view
    return view('about-us', compact('aboutus', 'teamMembers', 'upcomingEvents', 'latestEvent'));
}


        public function aboutCeo() {
        $aboutceo = AboutCeo::first();
        // Fetch the first record
        return view("about-ceo", compact('aboutceo'));
    }
  public function contractus()
    {
        $contactus = ContactUs::first(); // Fetch the first record
        return view("contact", compact('contactus'));
    }
    
    public function sendContactUs(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'message' => 'required|string',
        ]);
    
        // Send email using the Mailable class
        Mail::to('support@smartconsortiumconsultancy.com')->send(new ContactUsMail($validatedData));
    
        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function products_services(){
        $productsAndServices = ProductAndService::all();
        return view('products_services', compact('productsAndServices'));
    }
    
    public function job_opportunities()
    {
        $job_opportunities = JobOpportunity::all();
        return view('job_opportunities', compact('job_opportunities'));
    }

    public function single_job(JobOpportunity $job_opportunity)
    {
        return view('single_job_opportunity', compact('job_opportunity'));
    }
    public function join_us()
    {
        return view('join-us');
    }
    public function elearning_list()
    {
        // Retrieve all courses where the deadline_date is greater than or equal to the current date
        $courses = Course::where('deadline_date', '>=', now())->get();
        
        // Pass the filtered courses data to the view
        return view('learning-list', compact('courses'));
    }
    public function elearning_registration(Course $course)
    {
        return view('learning-registration', compact('course'));
    }
    public function store_registration(Request $request, Course $course)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:users,email',
            'address' => 'required|string',
        ]);
    
        // Create a new User
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'user_type' => 3, // Set user type to 'learners'
            'password' => Hash::make('defaultpassword'), // Handle password as needed
        ]);
    
        // Create a new Student record
        Student::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'course_id' => $course->id,
        ]);
    
        // Redirect to the course registration page with a success message
        return redirect()->route('elearning_registration', $course->id)
                         ->with('success', 'Registration successful!');
    }

    public function platinumMembers()
    {
        // Retrieve Platinum members with a random order and paginate the results
        $users = User::where('user_type', 2) // Assuming 2 for Membership users
                     ->whereHas('membership', function ($query) {
                         $query->where('membership_type', 1); // 1 for Platinum
                     })
                     ->inRandomOrder() // Order results randomly
                     ->paginate(6); // Number of users per page
    
        return view('platinum', compact('users'));
    }
    // Show Gold Membership Users
    public function goldMembers()
    {
        $users = User::where('user_type', 2) 
                     ->whereHas('membership', function ($query) {
                         $query->where('membership_type', 2); // 2 for Gold
                     })
                     ->inRandomOrder() // Order results randomly
                     ->paginate(6); // Number of users per page

        return view('gold', compact('users'));
    }

    // Show Silver Membership Users
    public function silverMembers()
    {
        $users = User::where('user_type', 2) 
                     ->whereHas('membership', function ($query) {
                         $query->where('membership_type', 3); // 3 for Silver
                     })
                     ->inRandomOrder() 
                     ->paginate(6);

        return view('silver', compact('users'));
    }

    public function platinumMemberDetails($id)
    {
        // Find the user with the given ID who is a Platinum member
        $user = User::where('user_type', 2)
                    ->whereHas('membership', function ($query) {
                        $query->where('membership_type', 1); // 1 for Platinum
                    })
                    ->findOrFail($id);
    
        // Find the membership details of the user
        $membership = $user->membership;
    
        // Fetch ads created by the user
        $ads = Ad::where('user_id', $id)->get();
    
        return view('platinum-member-details', compact('user', 'membership', 'ads'));
    }




    public function goldMemberDetails($id)
    {
        // Find the user with the given ID who is a Platinum member
        $user = User::where('user_type', 2) 
                    ->whereHas('membership', function ($query) {
                        $query->where('membership_type', 2); // 1 for Platinum
                    })
                    ->findOrFail($id);
    
        // Find the membership details of the user
        $membership = $user->membership;
    
        return view('gold-member-details', compact('user', 'membership'));
    }
    
    public function job_applicantion(JobOpportunity $job_opportunity)
    {
        return view('job_application', compact('job_opportunity'));
    }

public function job_applicantion_store(Request $request, JobOpportunity $job_opportunity)
{
    // Validate the form inputs
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'experience' => 'required|integer',
        'expected_salary' => 'required|numeric',
        'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
    ]);

    try {
        // Handle file upload
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('public/resumes');
        }

        // Save the job application to the database
        JobApplicant::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'experience' => $request->experience,
            'expected_salary' => $request->expected_salary,
            'resume' => $resumePath ? str_replace('public/', 'storage/', $resumePath) : null,
            'job_id' => $job_opportunity->id,
        ]);

        // Send email notification with attachment
Mail::send('emails.job_application', [
    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone,
    'experience' => $request->experience,
    'expected_salary' => $request->expected_salary,
    'resume' => $resumePath ? str_replace('public/', 'storage/', $resumePath) : null,
    'jobTitle' => $job_opportunity->title, // Pass the job title
], function ($message) use ($resumePath) {
    $message->to('support@smartconsortiumconsultancy.com')
            ->subject('New Job Application Received');

    // Attach the resume if it exists
    if ($resumePath) {
        $message->attach(storage_path('app/' . $resumePath), [
            'as' => basename($resumePath), // Optionally rename the file
            'mime' => 'application/pdf', // Change as necessary
        ]);
    }
});

        // Redirect with success message
        return redirect()->back()->with('success', 'Job application submitted successfully!');
    } catch (\Exception $e) {
        \Log::error('Job application submission failed: ' . $e->getMessage());

        return redirect()->back()->with('error', 'Failed to submit job application. Please try again.');
    }
}

}
