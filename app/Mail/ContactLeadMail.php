<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactLead;

class ContactLeadMail extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    public function __construct(ContactLead $lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this->subject('Lead is Confirmed — Vidya Global')
            ->view('website.email.ContactLeadMail');
    }
}