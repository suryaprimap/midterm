<?php

namespace App\Http\Controllers;


use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    function show(){
        $message = Message::get();
        return view('contact.show', compact('message'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitMessage(Request $request)
    {
        Log::info($request->all()); // Log all request data

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect()->route('messages.index')->with('success', 'Message submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function showMessages()
    {
        $messages = Message::all();

        // Pass messages to the view
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Contact $messages)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Contact $messages)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Contact $messages)
    // {
    //     //
    // }
}
