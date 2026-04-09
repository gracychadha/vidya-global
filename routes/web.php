<?php

use App\Http\Controllers\ContactLeadController;
use Illuminate\Support\Facades\Route;

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
Route::get('/blog-details', function () {
    return view('website.pages.blog-details');
})->name('blog-details');
// Route::get('/blog-details/{id}', function ($id) {
//     return view('website.pages.blog-details', compact('id'));
// })->name('blog-details');

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
Route::get('/andhra-pradesh', function () {
    return view('website.pages.associate-colleges');
})->name('andhra-pradesh');
Route::get('/punjab', function () {
    return view('website.pages.punjab-colleges');
})->name('punjab');
Route::get('/haryana', function () {
    return view('website.pages.harayana');
})->name('haryana');
Route::get('/delhi', function () {
    return view('website.pages.delhi');
})->name('delhi');


Route::get('/director-message',function(){
    return view('website.pages.director-message');
})->name('director-message');
Route::get('/vision-mission',function(){
    return view('website.pages.vision-mission');
})->name('vision-mission');
Route::get('/privacy-policy', function(){
    return view('website.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-condition', function(){
    return view('website.pages.terms-condition');
})->name('terms-condition');

// contact leads store
Route::post('/contact-us/store', [ContactLeadController::class, 'store'])->name('contact-us.store');