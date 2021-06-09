<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;

class ContactsController extends Controller
{
    /**
     * @param Illuminate\Http\Request $request
     * @param Property $property
     * @return View
     */
    public function contactForm(Property $property)
    {
        return view('contact.form', compact('property'));
    }
}
