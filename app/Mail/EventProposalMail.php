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

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['email'] ?? 'noreply@example.com', $this->data['name'] ?? 'Anonymous'),
            subject: 'Event Proposal Submission'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'event_proposal.event_proposal_mail',
            with: $this->data
        );
    }
}
