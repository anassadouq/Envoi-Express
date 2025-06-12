<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'nullable|string',
        ]);

        Contact::create($validated);
        return to_route('welcome')->with('success', 'Votre contact a été envoyé avec succès.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('contact.index');
    }
}