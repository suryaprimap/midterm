<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\messages;
use Illuminate\Http\Request;
use PSpell\Config;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->route('contact.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $messages)
    {
        $contact = Contact::get();
        return view('contact.show', compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $messages)
    {
        //
    }
}
