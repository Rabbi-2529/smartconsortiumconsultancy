<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->get();
        return view('admin.contact_us.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact_us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'map' => 'nullable|string|max:255',
        ]);

        ContactUs::create($request->all());

        return redirect()->route('contact-us-admin.index')->with('success', 'Contact information added successfully.');
    }

    public function edit(ContactUs $contact_us_admin)
    {
        return view('admin.contact_us.edit', compact('contact_us_admin'));
    }

    public function update(Request $request, ContactUs $contact_us_admin)
    {
        $request->validate([
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'map' => 'nullable|string|max:255',
        ]);

        $contact_us_admin->update($request->all());

        return redirect()->route('contact-us-admin.index')->with('success', 'Contact information updated successfully.');
    }



    public function destroy(ContactUs $contact_us_admin)
    {
        $contact_us_admin->delete();

        return redirect()->route('contact-us-admin.index')->with('success', 'Contact information deleted successfully.');
    }
}
