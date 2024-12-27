<?php

namespace App\Http\Controllers;

use App\Mail\EventProposalMail;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; // Import the Log facade

class EventProposalController extends Controller
{
    public function index()
    {
        return view('event_proposal.index');
    }

    public function sentMail(Request $request)
    {
        try {
            Log::info('Mail method triggered.');

            // Store form data in a variable
            $formData = $request->all();
            dd($formData);

            // Log the form data to ensure it's being passed correctly
            Log::info('Form Data: ' . json_encode($formData));

            // Check if the email field is set
            if (!isset($formData['email'])) {
                Log::error('Email not provided.');
                return response()->json([
                    'success' => false,
                    'error' => 'Email address is missing from the form.'
                ]);
            }

            // Log::info('Sending thank you email to: ' . $formData['email']);
            // Mail::to($formData['email']) // Ensure this is the correct email
            //     ->send(new ThankYouMail($formData)); // Send the thank you email


            // Send the event proposal email to the chairs
            Log::info('Sending email to the chairs: achuashwin049@gmail.com');
            Mail::to('achuashwin049@gmail.com')
                ->cc('')
                ->bcc('')
                ->send(new EventProposalMail($formData));

            // Send the thank you email to the person who submitted the proposal
           
            Log::info('Mails sent successfully.');

            // Return a JSON response
            return response()->json([
                'success' => true,
                'message' => 'Your event proposal has been submitted successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());

            // Return a JSON response with an error message
            return response()->json([
                'success' => false,
                'error' => 'Failed to send email. Please try again later.'
            ]);
        }
    }
}
