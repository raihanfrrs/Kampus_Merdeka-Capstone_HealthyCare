<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.data-master.admin.index')->with([
            'admin' => Admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.data-master.admin.add');
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
            'name' => 'required|min:2|max:255|unique:admins',
            'phone' => 'required|numeric|unique:admins',
            'email' => 'required|min:5|max:255|unique:admins|email:rfc,dns',
            'gender' => 'required',
            'birthPlace' => 'required|min:2|max:255',
            'birthDate' => 'required',
            'username' => 'required|min:5|max:255|unique:users|alpha_num',
            'password' => ['required', Password::min(5)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ]);

        $validateData['level'] = 'administrator';
        $validateData['password'] = bcrypt($validateData['password']);
        $user = User::create($validateData);

        $validateData['user_id'] = $user->id;

        Admin::create($validateData);

        return redirect()->intended('/admin/create')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Add Admin Success!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('administrator.data-master.admin.edit')->with([
            'admin' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $admins = [
            'birthPlace' => 'required|min:2|max:255',
            'birthDate' => 'required',
            'gender' => 'required'
        ];

        if ($request->name != $admin->name) {
            $admins['name'] = 'required|min:2|max:255|unique:admins';
        }

        if ($request->phone != $admin->phone) {
            $admins['phone'] = 'required|numeric|unique:admins';
        }

        if ($request->email != $admin->email) {
            $admins['email'] = 'required|min:5|max:255|unique:admins|email:rfc,dns';
        }

        $validateData = $request->validate($admins);

        Admin::whereId($admin->id)->update($validateData);

        if ($request->username != $admin->user->username) {
            $users['username'] = 'required|min:5|max:255|unique:users|alpha_num';

            User::whereId($admin->user_id)->update($request->validate($users));
        }

        if ($request->password != null) {
            $password['password'] = [Password::min(5)->mixedCase()->letters()->numbers()->symbols()->uncompromised()];
            
            User::whereId($admin->user_id)->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->intended('/admin')->with([
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        Admin::where('user_id', $admin->user_id)->delete();
        User::destroy($admin->user_id);

        return redirect()->intended('/admin')->with([
            'flash-type' => 'sweetalert',
            'case' => 'default',
            'position' => 'center',
            'type' => 'success',
            'message' => 'Delete Success!'
        ]);
    }
}
