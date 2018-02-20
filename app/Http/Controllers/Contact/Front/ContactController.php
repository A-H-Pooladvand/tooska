<?php

namespace App\Http\Controllers\Contact\Front;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        $contact = ContactUs::findOrFail(1);
        return view('contact.front.show', compact('contact'));
    }
}
