<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // main
    // public function store(Request $request)
    //     {
    //         $validatedData = $request->validate([
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|email|max:255',
    //             'phone' => 'nullable|string|max:20',
    //             'subject' => 'nullable|string|max:255',
    //             'message' => 'nullable|string',
    //         ]);

    //         try {
    //             // save data to database
    //             $contact = new Contact();
    //             $contact->name = $validatedData['name'];
    //             $contact->email = $validatedData['email'];
    //             $contact->phone = $validatedData['phone'];
    //             $contact->subject = $validatedData['subject'];
    //             $contact->message = $validatedData['message'];
    //             $contact->save();

    //             // redirect to success page with success message
    //             return back()->with('success', 'Thank you for contacting us!');
    //         } catch (\Exception $e) {
    //             // redirect back with error message
    //             return back()->with('error', 'Error: ' . $e->getMessage());
    //         }
    //     }

        // recaptcha try first with cpgt
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'nullable|string|max:255',
        'message' => 'nullable|string',
        'g-recaptcha-response' => ['required', new ReCaptcha]
    ]);


    try {
        // Save data to database
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
        $contact->save();

        // Redirect to success page with success message
        return back()->with('success', 'Thank you for contacting us!');
    } catch (\Exception $e) {
        // Redirect back with error message
        return back()->with('error', 'Error: ' . $e->getMessage());
    }
}

// try from itsolution doc

/**
     * Write code on Method
     *
     * @return response()
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required|digits:10|numeric',
    //         'subject' => 'required',
    //         'message' => 'required',
    //         'g-recaptcha-response' => ['required', new ReCaptcha]
    //     ]);

    //     $input = $request->all();

    //     /*------------------------------------------
    //     --------------------------------------------
    //     Write Code for Store into Database
    //     --------------------------------------------
    //     --------------------------------------------*/
    //     dd($input);

    //     return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
