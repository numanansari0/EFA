<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function submit(Request $request)
    {
        // Validate
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'course' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Send email
        Mail::raw(
            "New Admission Request:\n\n" .
            "Name: {$data['name']}\n" .
            "Email: {$data['email']}\n" .
            "Phone: {$data['phone']}\n" .
            "Course: {$data['course']}\n" .
            "Message: " . ($data['message'] ?? 'N/A'),
            function ($message) use ($data) {
                $message->to('efa.learnandearnacademy11@gmail.com')
                        ->subject('New Admission Application');
            }
        );

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
    public function apply(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required|string',
            'degree'     => 'required|string',
            'subject'    => 'required|string',
            'address'    => 'required|string',
            'agree'      => 'accepted',
        ]);

        // Compose email message
        $body = "New Instructor Application:\n\n"
            . "Name: {$data['first_name']} {$data['last_name']}\n"
            . "Email: {$data['email']}\n"
            . "Phone: {$data['phone']}\n"
            . "Degree: {$data['degree']}\n"
            . "Subject: {$data['subject']}\n"
            . "Address: {$data['address']}\n";

        // Send email
        Mail::raw($body, function ($message) {
            $message->to('efa.learnandearnacademy11@gmail.com')
                    ->subject('Instructor Application - EFA Academy');
        });

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
    public function submitContact(Request $request)
    {
        // Validate the form input
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::raw(
            "New Contact Message:\n\n" .
            "Name: {$data['name']}\n" .
            "Email: {$data['email']}\n" .
            "Subject: {$data['subject']}\n" .
            "Message: {$data['message']}",
            function ($message) use ($data) {
                $message->to('efa.learnandearnacademy11@gmail.com')
                        ->subject($data['subject']);
            }
        );

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
