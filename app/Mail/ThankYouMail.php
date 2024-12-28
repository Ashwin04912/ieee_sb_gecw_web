<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    // Constructor to accept the data to be sent to the email
    public function __construct($data)
    {
        $this->data = $data;
    }

    // Build the email
    public function build()
    {
        return $this->from('ieeesb@gecwyd.ac.in', 'IEEE SB GECW')  // Set the From address here
                    ->subject('Thank you for your event proposal')  // Set the subject
                    ->view('event_proposal.thank_you_mail')  // Set the view file to be used for the email content
                    ->with('data', $this->data);  // Pass data to the view
    }
}
