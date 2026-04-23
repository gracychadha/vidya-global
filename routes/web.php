<?php

use App\Http\Controllers\ContactLeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollegeStateController;
use Illuminate\Support\Facades\Route;
use App\Models\CollegeState;
use App\Models\Course;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsConditionController;


Route::get('/', function () {
    return view('website.pages.welcome');
})->name('home');
Route::get('/about-us', function () {
    return view('website.pages.about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::get('/our-blogs', function () {
    return view('website.pages.our-blogs');
})->name('our-blogs');
use App\Models\Blog;

Route::get('/blog-details/{slug}', function ($slug) {
    $blog = Blog::where('slug', $slug)->firstOrFail();
    return view('website.pages.blog-details', compact('blog'));
})->name('blog-details');

Route::get('/career-counselling', function () {
    return view('website.pages.career-counselling');
})->name('career-counselling');
Route::get('/diploma-admission', function () {
    return view('website.pages.diploma-guidance');
})->name('diploma-admission');
Route::get('/admission-guidance/{slug}', function () {
    return view('website.pages.admission-guidance');
})->name('admission-guidance');
Route::get('/engineering-admission', function () {
    return view('website.pages.engineering');
})->name('engineering-admission');
// Route::get('/course-details/{id}', function ($id) {
//     return view('website.pages.course-details', compact('id'));
// })->name('course-details');


Route::get('/associate-colleges/{slug}', function ($slug) {
    $state = CollegeState::where('slug', $slug)->firstOrFail();
    return view('website.pages.associate-colleges', compact('state'));
})->name('associate-colleges');
Route::get('/courses/{slug}', function ($slug) {
    $course = Course::where('slug', $slug)->firstOrFail();
    return view('website.pages.admission-guidance', compact('course'));
})->name('courses');
Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.show');
Route::get('/punjab', function () {
    return view('website.pages.punjab-colleges');
})->name('punjab');
Route::get('/haryana', function () {
    return view('website.pages.harayana');
})->name('haryana');
Route::get('/delhi', function () {
    return view('website.pages.delhi');
})->name('delhi');


Route::get('/director-message', function () {
    return view('website.pages.director-message');
})->name('director-message');
Route::get('/vision-mission', function () {
    return view('website.pages.vision-mission');
})->name('vision-mission');
Route::get('/privacy-policy', function () {
    return view('website.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-condition', function () {
    return view('website.pages.terms-condition');
})->name('terms-condition');

// contact leads store
Route::post('/contact-us/store', [ContactLeadController::class, 'store'])->name('contact-us.store');



Route::get('/dashboard', function () {
    return view('admin.views.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->group(function () {

    // setting page
    Route::get('/admin-settings', function () {
        return view('admin.views.setting');
    })->name('admin-setting');

    // profile CRUD
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // admin settings
    Route::get('/admin-settings', function () {
        return view('admin.views.setting');
    })->name('admin-setting');


    // CONTACT LEADS
    Route::get('/admin-leads', [ContactLeadController::class, 'index'])->name('admin-leads');
    Route::delete('/admin-leads/{lead}', [ContactLeadController::class, 'destroy'])->name('admin-leads.destroy');
    Route::post('/leads/delete-selected', [ContactLeadController::class, 'deleteSelected']);
    // ************************************************************************************
    // ************************************************************************************
    // Event categories page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-college-states', [CollegeStateController::class, 'index'])->name('admin-college-states');
    Route::post('/admin-college-states', [CollegeStateController::class, 'store'])->name('admin-college-states.store');
    Route::put('/admin-college-states/{collegeState}', [CollegeStateController::class, 'update'])->name('admin-college-states.update');
    Route::delete('/admin-college-states/{collegeState}', [CollegeStateController::class, 'destroy'])->name('admin-college-states.destroy');
    // collge crud 
    // CRUD (index, create, store, edit, update, delete)
    Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index');
    Route::post('/colleges', [CollegeController::class, 'store'])->name('colleges.store');
    Route::put('/colleges/{college}', [CollegeController::class, 'update'])->name('colleges.update');
    Route::delete('/colleges/{college}', [CollegeController::class, 'destroy'])->name('colleges.destroy');
    Route::post('colleges-import', [CollegeController::class, 'import'])->name('colleges.import');
    // BULK IMPORT
    Route::post('colleges-import', [CollegeController::class, 'import'])->name('colleges.import');

    Route::get('/admin-course', [CourseController::class, 'index'])->name('admin-course.index');
    Route::post('/admin-course', [CourseController::class, 'store'])->name('admin-course.store');
    Route::put('/admin-course/{item}', [CourseController::class, 'update'])->name('admin-course.update');
    Route::delete('/admin-course/{item}', [CourseController::class, 'destroy'])->name('admin-course.destroy');



   
    // blogs
    Route::get('/admin-blogs', [BlogController::class, 'index'])->name('admin-blogs');
    Route::post('/admin-blogs', [BlogController::class, 'store'])->name('admin-blogs.store');
    Route::put('/admin-blogs/{blog}', [BlogController::class, 'update'])->name('admin-blogs.update');
    Route::delete('/admin-blogs/{blog}', [BlogController::class, 'destroy'])->name('admin-blogs.destroy');
  

   
    // ************************************************************************************
    // ************************************************************************************
    // privacy Policy page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin-privacy-policy.index');
    Route::put('/admin-privacy-policy/{section}', [PrivacyPolicyController::class, 'update'])->name('admin-privacy-policy.update');
    // ************************************************************************************
    // ************************************************************************************
    // Terms Condition page CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-terms-condition', [TermsConditionController::class, 'index'])->name('admin-terms-condition.index');
    Route::put('/admin-terms-condition/{section}', [TermsConditionController::class, 'update'])->name('admin-terms-condition.update');
    // ************************************************************************************
    // ************************************************************************************
    // Website settings CMS
    // ************************************************************************************
    // ************************************************************************************

    Route::get('/admin-settings', [WebsiteSettingController::class, 'index'])->name('admin-settings.index');
    Route::put('/admin-settings', [WebsiteSettingController::class, 'update'])->name('admin-settings.update');
    // ************************************************************************************
    // ************************************************************************************
    // social settings CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-social-settings', [SocialSettingController::class, 'index'])
        ->name('admin-social-settings.index');

    Route::put('/admin-social-settings', [SocialSettingController::class, 'update'])
        ->name('admin-social-settings.update');
    // ************************************************************************************
    // ************************************************************************************
    // color settings CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-colour-settings', [ColourSettingController::class, 'index'])
        ->name('admin-colour-settings.index');

    Route::put('/admin-colour-settings', [ColourSettingController::class, 'update'])
        ->name('admin-colour-settings.update');
});
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth', 'role:admin'])->group(function () {

    // user management

    Route::get('/admin-users', [UserController::class, 'index'])->name('admin-users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


    // roles
    Route::get('/admin-roles', function () {
        return view('admin.views.admin-roles');
    })->name('admin-roles');


});
require __DIR__ . '/auth.php';