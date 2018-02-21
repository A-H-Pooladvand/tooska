<?php

namespace App\Http\Controllers\Contact\Front;

use App\Contact;
use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $contact = ContactUs::findOrFail(1);
        return view('contact.front.show', compact('contact'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'nullable|max:60|email',
            'phone' => 'nullable|max:20',
            'subject' => 'required|max:80',
            'content' => 'required|max:1000',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'content' => $request['content']
        ]);

        return redirect()->back()->with('success', 'درخواست شما با موفقیت ثبت، و پس از مشاهده با شما تماس گرفته خواهد شد.');
    }


}
