<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailFormSubmit;

class EmailNotificationController extends Controller
{
    //
    public function submitInquiryForm(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'group' => 'required|string',
        //     'fullname' => 'required|string',
        //     'email' => 'required|email',
        //     'subject' => 'required|string',
        //     'message' => 'required|string|max:1000',
        // ]);
        Mail::to('aetolentino@joy-nostalg.com')->send(new EmailFormSubmit($request->all(),null,'inquiry','JN-Website Inquiry'));
        return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
    }
    public function submitJobForm(Request $request){
        // dd($request);
        // $validatedData = $request->validate([
        //     'group' => 'required|string',
        //     'full_name' => 'required|string',
        //     'email' => 'required|email',
        //     'subject' => 'required|string',
        //     'message' => 'required|string|max:1000',
        //     'attachment' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048', // Adjust as needed
        // ]);
        $attachment = $request->file('CV');
// dd($attachment);
// Mail::to('ggvivar@joy-nostalg.com')->send(new EmailFormSubmit($request->all(), $attachment, 'jobForm','JN-Website Job Application'));
        Mail::to('aetolentino@joy-nostalg.com')->send(new EmailFormSubmit($request->all(), $attachment, 'jobForm','JN-Website Job Application'));

        return redirect()->back()->with('success', 'Your Job Application has been sent successfully!');
    } 

}

