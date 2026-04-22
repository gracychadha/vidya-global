<?php

use App\Http\Controllers\ContactLeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollegeStateController;
use Illuminate\Support\Facades\Route;
use App\Models\CollegeState;
use App\Http\Controllers\CollegeController;


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
Route::get('/admission-guidance', function () {
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
    Route::resource('colleges', CollegeController::class);

    // BULK IMPORT
    Route::post('colleges-import', [CollegeController::class, 'import'])
        ->name('colleges.import');
    // admin gallery 
    Route::get('/admin-gallery', [GalleryController::class, 'index'])->name('admin-gallery');
    Route::post('/admin-gallery', [GalleryController::class, 'store'])->name('admin-gallery.store');
    Route::put('/admin-gallery/{gallery}', [GalleryController::class, 'update'])->name('admin-gallery.update');
    Route::delete('/admin-gallery/{gallery}', [GalleryController::class, 'destroy'])->name('admin-gallery.destroy');
    // admin partner
    Route::get('/admin-partners', [PartnerController::class, 'index'])->name('admin-partners');
    Route::post('/admin-partners', [PartnerController::class, 'store'])->name('admin-partners.store');
    Route::put('/admin-partners/{partner}', [PartnerController::class, 'update'])->name('admin-partners.update');
    Route::delete('/admin-partners/{partner}', [PartnerController::class, 'destroy'])->name('admin-partners.destroy');
    // reviews
    Route::get('/admin-reviews', [ReviewController::class, 'index'])->name('admin-reviews');
    Route::post('/admin-reviews', [ReviewController::class, 'store'])->name('admin-reviews.store');
    Route::put('/admin-reviews/{review}', [ReviewController::class, 'update'])->name('admin-reviews.update');
    Route::delete('/admin-reviews/{review}', [ReviewController::class, 'destroy'])->name('admin-reviews.destroy');
    // video
    Route::get('/admin-videos', [VideoController::class, 'index'])->name('admin-videos');
    Route::post('/admin-videos', [VideoController::class, 'store'])->name('admin-videos.store');
    Route::put('/admin-videos/{video}', [VideoController::class, 'update'])->name('admin-videos.update');
    Route::delete('/admin-videos/{video}', [VideoController::class, 'destroy'])->name('admin-videos.destroy');
    // blogs
    Route::get('/admin-blogs', [BlogController::class, 'index'])->name('admin-blogs');
    Route::post('/admin-blogs', [BlogController::class, 'store'])->name('admin-blogs.store');
    Route::put('/admin-blogs/{blog}', [BlogController::class, 'update'])->name('admin-blogs.update');
    Route::delete('/admin-blogs/{blog}', [BlogController::class, 'destroy'])->name('admin-blogs.destroy');
    // organizer 
    Route::get('/admin-organizers', [OrganizerController::class, 'index'])->name('admin-organizers');
    Route::post('/admin-organizers', [OrganizerController::class, 'store'])->name('admin-organizers.store');
    Route::put('/admin-organizers/{organizer}', [OrganizerController::class, 'update'])->name('admin-organizers.update');
    Route::delete('/admin-organizers/{organizer}', [OrganizerController::class, 'destroy'])->name('admin-organizers.destroy');
    //    team
    Route::get('/admin-team', [TeamController::class, 'index'])->name('admin-team');
    Route::post('/admin-team', [TeamController::class, 'store'])->name('admin-team.store');
    Route::put('/admin-team/{team}', [TeamController::class, 'update'])->name('admin-team.update');
    Route::delete('/admin-team/{team}', [TeamController::class, 'destroy'])->name('admin-team.destroy');

    // Nodal Registration Leads
    Route::get('/admin-nodal-registration', [NodalRegisterationController::class, 'index'])->name('admin-nodal-registration');
    Route::delete('/admin-nodal-registration/{nodalRegistration}', [NodalRegisterationController::class, 'destroy'])->name('admin-nodal-registration.destroy');
    Route::post('/nodal-registrations/delete-selected', [NodalRegisterationController::class, 'deleteSelected'])->name('nodal-registrations.delete-selected');
    // booking trial leads
    Route::get('/admin-booking', [BookATrialController::class, 'index'])->name('admin-booking');
    Route::delete('/admin-booking/{trial}', [BookATrialController::class, 'destroy'])->name('admin-booking.destroy');
    Route::post('/booking-trials/delete-selected', [BookATrialController::class, 'deleteSelected'])->name('booking-trials.delete-selected');
    // player registration leads
    Route::get('/admin-player-registration', [PlayerRegistrationController::class, 'index'])->name('admin-player-registration');
    Route::delete('/admin-player-registration/{player}', [PlayerRegistrationController::class, 'destroy'])->name('admin-player-registration.destroy');
    Route::post('/player-registrations/delete-selected', [PlayerRegistrationController::class, 'deleteSelected'])->name('player-registrations.delete-selected');
    // admin membership access leads
    Route::get('/admin-membership-access', [MembershipAccessController::class, 'index'])->name('admin-membership-access');
    Route::delete('/admin-membership-access/{membershipAccess}', [MembershipAccessController::class, 'destroy'])->name('admin-membership-access.destroy');
    Route::post('/membership-access/delete-selected', [MembershipAccessController::class, 'deleteSelected'])->name('membership-access.delete-selected');
    // admin influencer leads
    Route::get('/admin-influencer', [InfluencerController::class, 'index'])->name('admin-influencer');
    Route::delete('/admin-influencer/{influencer}', [InfluencerController::class, 'destroy'])->name('admin-influencer.destroy');
    Route::post('/influencers/delete-selected', [InfluencerController::class, 'deleteSelected'])->name('influencers.delete-selected');
    // sponsor leads
    Route::get('/admin-sponsor', [SponsorController::class, 'index'])->name('admin-sponsor');
    ROute::delete('/admin-sponsor/{sponsor}', [SponsorController::class, 'destroy'])->name('admin-sponsor.destroy');
    Route::post('/sponsors/delete-selected', [SponsorController::class, 'deleteSelected'])->name('sponsors.delete-selected');

    // ************************************************************************************
    // ************************************************************************************
    // Sports CRUD CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-sports', [SportController::class, 'index'])->name('admin-sports');
    Route::post('/admin-sports', [SportController::class, 'store'])->name('admin-sports.store');
    Route::put('/admin-sports/{sport}', [SportController::class, 'update'])->name('admin-sports.update');
    Route::delete('/admin-sports/{sport}', [SportController::class, 'destroy'])->name('admin-sports.destroy');


    // ************************************************************************************
    // ************************************************************************************
    // home page CMS
    // ************************************************************************************
    // ************************************************************************************
    // admin home slider
    Route::get('/admin-home-slider', [HomeSliderController::class, 'index'])->name('admin-home-slider');
    Route::post('/admin-home-slider', [HomeSliderController::class, 'store'])->name('admin-home-slider.store');
    Route::put('/admin-home-slider/{slider}', [HomeSliderController::class, 'update'])->name('admin-home-slider.update');
    Route::delete('/admin-home-slider/{slider}', [HomeSliderController::class, 'destroy'])->name('admin-home-slider.destroy');
    // about section
    Route::get('/admin-home-about', [HomeAboutSectionController::class, 'index'])->name('admin-home-about.index');
    Route::put('/admin-home-about', [HomeAboutSectionController::class, 'update'])->name('admin-home-about.update');
    // how we work section
    Route::get('/admin-how-we-work', [HomeWorkSectionController::class, 'index'])->name('admin-how-we-work.index');
    Route::put('/admin-how-we-work', [HomeWorkSectionController::class, 'update'])->name('admin-how-we-work.update');
    // home benefit section
    Route::get('/admin-home-benefit', [HomeBenefitController::class, 'index'])->name('admin-home-benefit.index');
    Route::put('/admin-home-benefit/{section}', [HomeBenefitController::class, 'update'])
        ->name('admin-home-benefit.update');
    // ************************************************************************************
    // ************************************************************************************
    // About page CMS
    // ************************************************************************************
    // ************************************************************************************
    // about page about section
    Route::get('/admin-about-section', [AboutSectionController::class, 'index'])->name('admin-about-section.index');
    Route::put('/admin-about-section/{section}', [AboutSectionController::class, 'update'])
        ->name('admin-about-section.update');
    // about page values section
    Route::get('/admin-about-values', [AboutValueController::class, 'index'])->name('admin-about-values.index');
    Route::put('/admin-about-values/{section}', [AboutValueController::class, 'update'])
        ->name('admin-about-values.update');
    // ************************************************************************************
    // ************************************************************************************
    // Organizer page CMS
    // ************************************************************************************
    // ************************************************************************************
    // organizer about section
    Route::get('/admin-organizer-about', [OrganizerAboutSectionController::class, 'index'])->name('admin-organizer-about.index');
    Route::put('/admin-organizer-about/{section}', [OrganizerAboutSectionController::class, 'update'])
        ->name('admin-organizer-about.update');
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
    // Required Documents CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-required-documents', [RequiredDocumentController::class, 'index'])->name('admin-required-documents.index');
    Route::put('/admin-required-documents/{section}', [RequiredDocumentController::class, 'update'])->name('admin-required-documents.update');
    // ************************************************************************************
    // ************************************************************************************
    // Selection Process CMS
    // ************************************************************************************
    // ************************************************************************************
    Route::get('/admin-selection-process', [SelectionProcessController::class, 'index'])->name('admin-selection-process.index');
    Route::put('/admin-selection-process/{section}', [SelectionProcessController::class, 'update'])->name('admin-selection-process.update');
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