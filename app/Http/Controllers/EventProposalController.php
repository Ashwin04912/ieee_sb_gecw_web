<?php

namespace App\Http\Controllers;

use App\Mail\EventProposalMail;
use App\Mail\ThankYouMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

            // Validate the incoming request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:15',
                // 'event_name' => 'required|string|max:255',
                'event_description' => 'required|string',
                'audience' => 'required|string|max:255',
                'res_person' => 'required|string|max:255',
                'audience_count' => 'required|integer',
                'notes' => 'nullable|string',
            ]);

            // Log the validated data for debugging
            Log::info('Validated Form Data: ' . json_encode($validatedData));

            // Send the event proposal email to the chairs
            Log::info('Sending email to the chair(s): achuashwin049@gmail.com');
            Mail::to(['ash_win@ieee.org', 'muhammadramees697@gmail.com'])
                ->send(new EventProposalMail($validatedData));
                // Log::info('Mails sent to chair successfully.');

            // Send the thank you email to the person who submitted the proposal
            Log::info('Sending thank you email to: ' . $validatedData['email']);
            Mail::to($validatedData['email'])
                ->send(new ThankYouMail($validatedData));

            Log::info('Mails sent successfully.');

            // Return a JSON response
            return response()->json([
                'success' => true,
                'message' => 'Your event proposal has been submitted successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'error' => 'Failed to send email. Please try again later.'
            ]);
        }
    }
}
