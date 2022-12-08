<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.data-master.patient.index')->with([
            'patient' => Patient::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.data-master.patient.add');
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
            'name' => 'required|min:2|max:255|unique:patients',
            'phone' => 'required|numeric|unique:patients',
            'email' => 'required|min:5|max:255|unique:patients|email:rfc,dns',
            'gender' => 'required',
            'birthPlace' => 'required|min:2|max:255',
            'birthDate' => 'required',
            'username' => 'required|min:5|max:255|unique:users|alpha_num',
            'password' => ['required', Password::min(5)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ]);

        $validateData['level'] = 'patient';
        $validateData['password'] = bcrypt($validateData['password']);
        $user = User::create($validateData);

        $validateData['user_id'] = $user->id;

        Patient::create($validateData);

        return redirect()->intended('/patient/create')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Add Patient Success!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('administrator.data-master.patient.edit')->with([
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patients = [
            'birthPlace' => 'required|min:2|max:255',
            'birthDate' => 'required',
            'gender' => 'required'
        ];

        if ($request->name != $patient->name) {
            $patients['name'] = 'required|min:2|max:255|unique:patients';
        }

        if ($request->phone != $patient->phone) {
            $patients['phone'] = 'required|numeric|unique:patients';
        }

        if ($request->email != $patient->email) {
            $patients['email'] = 'required|min:5|max:255|unique:patients|email:rfc,dns';
        }

        $validateData = $request->validate($patients);

        Patient::whereId($patient->id)->update($validateData);

        if ($request->username != $patient->user->username) {
            $users['username'] = 'required|min:5|max:255|unique:users|alpha_num';

            User::whereId($patient->user_id)->update($request->validate($users));
        }

        if ($request->password != null) {
            $password['password'] = [Password::min(5)->mixedCase()->letters()->numbers()->symbols()->uncompromised()];
            
            User::whereId($patient->user_id)->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->intended('/patient')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Update Success!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::whereId($patient->id)->delete();
        User::destroy($patient->user_id);

        return redirect()->intended('/patient')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Delete Success!'
        ]);
    }
}
