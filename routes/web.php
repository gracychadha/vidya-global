<?php

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
Route::get('/course-details', function () {
    return view('website.pages.course-details');
})->name('course-details');
// Route::get('/course-details/{id}', function ($id) {
//     return view('website.pages.course-details', compact('id'));
// })->name('course-details');
Route::get('/associate-colleges', function () {
    return view('website.pages.associate-colleges');
})->name('associate-colleges');

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