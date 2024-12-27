<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;  // Store the form data

    // Constructor to initialize the data
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Define the envelope (sender and subject)
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('ieeesbgecw@gmail.com', 'Event Proposal Team'), // Sender email and name
            subject: 'Thank You for Your Event Proposal Submission' // Subject
        );
    }

    // Define the content of the email
    public function content(): Content
    {
        return new Content(
            view: 'event_proposal.thank_you',  // Path to your thank you email view
        );
    }
}
