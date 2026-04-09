<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactLead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactLeadMail;
class ContactLeadController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate fields + captcha presence
        $request->validate([
            'name' => [
                'required',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
            'email' => 'required|email|max:255',
            'phone' => [
                'required',
                'regex:/^[6-9]\d{9}$/'
            ],
            'enquiry_for' => [
                'required',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],

            'message' => [
                'nullable',
                'max:5000',
                'regex:/^(?!.*(<|>|script|onload|onclick|javascript:)).*$/i'
            ],


        ]);
        // dd($request->all());
        if (!$request->filled('g-recaptcha-response')) {
            return back()->withErrors([
                'captcha' => 'Captcha token missing.'
            ]);
        }
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );

        $captcha = $response->json();
        // dd($captcha);
        // score check (v3 logic)
        if (!$captcha['success'] || $captcha['score'] < 0.5) {
            return back()->withErrors([
                'captcha' => 'Captcha verification failed. Please try again.'
            ])->withInput();
        }



        $Lead = ContactLead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'enquiry_for' => $request->enquiry_for,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        Mail::to($Lead->email)->send(new ContactLeadMail($Lead));
        Mail::to('info@vidyaglobal.in')->send(new ContactLeadMail($Lead));
        return back()->with('success', 'Your lead has been submitted successfully!');
    }
}
