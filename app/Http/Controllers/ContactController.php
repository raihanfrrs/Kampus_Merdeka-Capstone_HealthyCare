<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Patient;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(auth()->user()->level)) {
            if (auth()->user()->level == 'administrator') {
                return view('administrator.reporting.message.index')->with([
                    'message' => Contact::all(),
                    'title' => 'Reporting',
                    'subtitle' => 'Message'
                ]);
            }else if (auth()->user()->level == 'patient') {
                return view('patient.contact.index')->with([
                    'patient' => Patient::where('user_id', auth()->user()->id)->get()
                ]);
            }
        }
        return view('patient.contact.index');
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
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|min:5|max:255|email:rfc,dns',
            'message' => 'required'
        ]);

        $patient = Patient::where('user_id', auth()->user()->id)->get();

        $validateData['patient_id'] = $patient[0]->id;

        Contact::create($validateData);

        return redirect()->intended('/contact')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Sending Message Success!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('administrator.reporting.message.show')->with([
            'contact' => $contact,
            'title' => 'Reporting',
            'subtitle' => 'Message'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
