<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Model\Property;
use App\Mail\ContactProperty;

class ContactsController extends Controller
{
    /**
     * @param Property $property
     * @return View
     */
    public function contactForm(Property $property)
    {
        return view('contact.form', compact('property'));
    }

    /**
     * @param App\Http\Requests\ContactUs $request
     * @param Property $property
     */
    public function sendMail(ContactUs $request, Property $property)
    {
        $request->validated();

        Mail::to('test@ytest.jp')->send(new ContactProperty($property, $request));
        return view('contact.thanx', compact('property'));
    }
}
