<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AboutCeoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductAndServiceController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CoverImageController;
use App\Http\Controllers\JobOpportunityController;
use App\Http\Controllers\AdminPhotoGalleryController;
use App\Http\Controllers\SocialLinkController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UpcomingEventController;
use App\Http\Controllers\EmployersCornerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\CourseFileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CourseTutorialController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipUserController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\AdsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/auth-login', [CustomAuthController::class, 'loginView'])->name('login');


Route::post('/custom-login', [CustomAuthController::class, 'login'])->name('custom.login');

Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');



Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/video_gallery', [UserController::class, 'videoGallery'])->name('video_gallery');
Route::get('/latest_news', [UserController::class, 'News'])->name('latest_news');
Route::get('/news_details/{id}', [UserController::class, 'newsDetails'])->name('news_details');
Route::get('/aboutUs', [UserController::class, 'aboutUs'])->name('aboutUs');
Route::get('/aboutCeo', [UserController::class, 'aboutCeo'])->name('aboutCeo');
Route::get('/contractus', [UserController::class, 'contractus'])->name('contractus');
Route::get('/products_services',[UserController::class,'products_services'])->name('products_services.client');
Route::get('/photo_gallery',[UserController::class,'photoGallery'])->name('photo_gallery.user');
Route::get('job-opportunities-list', [UserController::class, 'job_opportunities'])->name('job_opportunities.client');
Route::get('job-opportunity/{job_opportunity}', [UserController::class, 'single_job'])->name('job_opportunity.single');
Route::get('/job-applicantion/{job_opportunity}', [UserController::class, 'job_applicantion'])->name('job_applicantion.client');
Route::post('/job-applicantion-store/{job_opportunity}', [UserController::class, 'job_applicantion_store'])->name('job_applicantion_store.client');
Route::get('join-us', [UserController::class, 'join_us'])->name('join_us');
Route::get('elearning_list', [UserController::class, 'elearning_list'])->name('elearning_list');
Route::get('/courses/{course}/register', [UserController::class, 'elearning_registration'])->name('elearning_registration');
Route::post('/courses/{course}/register', [UserController::class, 'store_registration'])->name('store_registration');
Route::get('/platinum-members', [UserController::class, 'platinumMembers'])->name('platinum_members');
Route::get('/gold-members', [UserController::class, 'goldMembers'])->name('gold_members');
Route::get('/silver-members', [UserController::class, 'silverMembers'])->name('silver_members');

Route::get('/platinum-member/{id}', [UserController::class, 'platinumMemberDetails'])->name('platinum_member_details');
Route::get('/gold-member/{id}', [UserController::class, 'goldMemberDetails'])->name('gold_member_details');

// Forgot Password Routes
Route::get('password/reset', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset Password Routes
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');

Route::get('/product/details/{id}', [UserController::class, 'productDetails'])->name('product.details');
Route::post('/send-contact-us', [UserController::class, 'sendContactUs'])->name('send.contact.us');
Route::middleware('auth')->group(function () {
    Route::get('admin', [ProfileController::class, 'admin'])->name('admin');
    
    Route::resource('team', TeamController::class);
    Route::resource('about_ceos', AboutCeoController::class);
    Route::delete('/about_ceos/{aboutCeo}', [AboutCeoController::class, 'destroy'])->name('about_ceos.destroy');
    Route::resource('achievements', AchievementController::class);
    
    
    Route::resource('clients', ClientController::class);
    Route::resource('contact-us-admin', ContactUsController::class)->parameters(['contact-us-admin' => 'contact_us_admin']);
    Route::resource('product_and_services', ProductAndServiceController::class);
    Route::resource('job-opportunities', JobOpportunityController::class);
    Route::resource('social_links', SocialLinkController::class);
    Route::resource('cover_images',CoverImageController::class);
    Route::resource('news',NewsController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('upcoming_events', UpcomingEventController::class);
    Route::resource('employers_corners',EmployersCornerController::class);
        Route::resource('courses', CourseController::class);
    Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
    
    Route::get('/profile', [ProfilePageController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfilePageController::class, 'updateProfile'])->name('profile.update');

// Update the password
    Route::post('/profile/update-password', [ProfilePageController::class, 'updatePassword'])->name('profile.updatePassword');
    
    Route::get('aboutus/our-vision/create', [AboutUsController::class, 'our_vision_create'])->name('our_vision.create');
    Route::post('aboutus/our-vision/store', [AboutUsController::class, 'our_vision_store'])->name('our_vision.store');
    Route::get('aboutus/our-promise/create', [AboutUsController::class, 'our_promise_create'])->name('our_promise.create');
    Route::post('aboutus/our-promise/store', [AboutUsController::class, 'our_promise_store'])->name('our_promise.store');
    Route::get('aboutus/our-goal/create', [AboutUsController::class, 'our_goal_create'])->name('our_goal.create');
    Route::post('aboutus/our-goal/store', [AboutUsController::class, 'our_goal_store'])->name('our_goal.store');
    Route::get('aboutus/why-different/create', [AboutUsController::class, 'why_different_create'])->name('why_different.create');
    Route::post('aboutus/why-different/store', [AboutUsController::class, 'why_different_store'])->name('why_different.store');
    Route::get('aboutus/why-choose-us/create', [AboutUsController::class, 'why_choose_us_create'])->name('why_choose_us.create');
    Route::post('aboutus/why-choose-us/store', [AboutUsController::class, 'why_choose_us_store'])->name('why_choose_us.store');
    Route::get('admin/photo-gallery/create', [AdminPhotoGalleryController::class, 'photo_gallery_create'])->name('photo_gallery.create');
    Route::post('admin/photo-gallery/store', [AdminPhotoGalleryController::class, 'photo_gallery_store'])->name('photo_gallery.store');
    Route::delete('admin/photo-gallery/{photoGallery}', [AdminPhotoGalleryController::class, 'photo_gallery_destroy'])->name('photo_gallery.destroy');
    Route::get('admin/photo-gallery/{id}/edit', [AdminPhotoGalleryController::class, 'photo_gallery_edit'])->name('photo_gallery.edit');

// Route to update a specific photo
Route::put('admin/photo-gallery/{id}', [AdminPhotoGalleryController::class, 'photo_gallery_update'])->name('photo_gallery.update');

    Route::get('/course-files', [CourseFileController::class, 'index'])->name('course_files.index');
    
 
    Route::get('/course-files/course/{course_id}', [CourseFileController::class, 'showFiles'])->name('course_files.showFiles');
    

    Route::get('/course-files/create', [CourseFileController::class, 'create'])->name('course_files.create');
    


// For updating the video (PUT request)
Route::resource('videos', VideoController::class);


    Route::post('/course-files', [CourseFileController::class, 'store'])->name('course_files.store');
    

    Route::get('/course-files/{id}/edit', [CourseFileController::class, 'edit'])->name('course_files.edit');

    Route::put('/course-files/{id}', [CourseFileController::class, 'update'])->name('course_files.update');
    
    Route::delete('/course-files/{id}', [CourseFileController::class, 'destroy'])->name('course_files.destroy');
    
    Route::get('/course-tutorials', [CourseTutorialController::class, 'index'])->name('course_tutorials.index');

    Route::get('/course-tutorials/course/{course_id}', [CourseTutorialController::class, 'showTutorials'])->name('course_tutorials.showTutorials');

    Route::get('/course-tutorials/create', [CourseTutorialController::class, 'create'])->name('course_tutorials.create');

    Route::post('/course-tutorials', [CourseTutorialController::class, 'store'])->name('course_tutorials.store');

    Route::get('/course-tutorials/{id}/edit', [CourseTutorialController::class, 'edit'])->name('course_tutorials.edit');

    Route::put('/course-tutorials/{id}', [CourseTutorialController::class, 'update'])->name('course_tutorials.update');

    Route::delete('/course-tutorials/{id}', [CourseTutorialController::class, 'destroy'])->name('course_tutorials.destroy');
    
        Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/course/{course_id}', [MessageController::class, 'showMessages'])->name('messages.showMessages');
    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/edit/{id}', [MessageController::class, 'edit'])->name('messages.edit');
    Route::put('/messages/{id}', [MessageController::class, 'update'])->name('messages.update');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

    
    Route::get('/learners/{learner_id}/tutorials', [LearnerController::class, 'tutorials'])->name('learners.tutorials');
    Route::get('/tutorials/{course_id}', [LearnerController::class, 'show'])->name('tutorials.show');
    Route::get('/learner/{learner_id}/files', [LearnerController::class, 'file'])->name('learner.files');
    

// Route to show files for a specific course
    Route::get('/course/{course_id}/files', [LearnerController::class, 'show_file'])->name('course.files');
    Route::get('/learner/{learner_id}/messages', [LearnerController::class, 'messages'])->name('learner.messages');
Route::get('/course/{course_id}/messages', [LearnerController::class, 'show_messages'])->name('course.messages');
    Route::resource('memberships', MembershipController::class);


Route::resource('membership-users', MembershipUserController::class);
Route::resource('course-users', CourseUserController::class);
        
Route::resource('ads', AdsController::class);


    
});



// admin routes

// require _DIR_.'/auth.php';
