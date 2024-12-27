<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class EventProposalMail extends Mailable
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
            from: new Address($this->data['email'],  $this->data['name']), // Change sender email if necessary
            subject: 'Event Proposal Submission' // Customize the subject
        );
    }

    // Define the content (email body) with dynamic data
    public function content(): Content
    {
        return new Content(
            view: 'event_proposal.event_proposal_mail',  // Email view path
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'phone' => $this->data['phone'],
                'event_name' => $this->data['event_name'],
                'event_description' => $this->data['event_description'],
                'audience' => $this->data['audience'],
                'audience_count' => $this->data['audience_count'],
                'notes' => $this->data['notes'],
            ]
        );
    }

}
