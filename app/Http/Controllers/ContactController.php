<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact'); // Your contact form view
    }

    public function sendMail(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create the email data
        $emailData = [
            'first_name' => $validatedData['fname'],
            'last_name' => $validatedData['lname'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ];

        // Send the email
        Mail::to('therealmarvin04@gmail.com')->send(new ContactFormMail($emailData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
