<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Handle the form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Prepare the contact data
        $contactData = $request->only(['name', 'email', 'subject', 'message']);

        // Send the email
        Mail::to('your-email@example.com')->send(new ContactFormMail($contactData));

        // Return a response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
