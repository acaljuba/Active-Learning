<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::sortable()->paginate(5);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // RegisterController does this.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // RegisterController does this.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        // Check for correct user
        // if (auth()->user()->id !== $user->user_id) {
        //     return redirect('/users')->with('error', 'Unauthorized Page');
        // }

        return view('users.edit')->with('user', $user);
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
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'curPassword' => 'required',
            'newPassword' => 'required',
            'confirm' => 'required'
        ]);

        // Edit User Account
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        // Check current password
        if (!Hash::check($request->input('curPassword'), $user->password)) {
            return redirect('/users/' . $id . '/edit')->with('error', 'Current password does not match');
        }
        // Check if new password is same as current password
        if (Hash::check($request->input('newPassword'), $user->password)) {
            return redirect('/users/' . $id . '/edit')->with('error', 'New password can not be same as current password');
        }
        // Check if new password is confirmed
        if ($request->input('newPassword') !== $request->input('confirm')) {
            return redirect('/users/' . $id . '/edit')->with('error', 'New password not confirmed');
        }
        $user->password = bcrypt($request->input('newPassword'));
        $user->save();

        return redirect('/users/' . $id)->with('success', 'User Account Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // Check for correct user
        // dd(auth()->guest());
        // if (auth()->user()->id !== $user->id) {
        //     return redirect('/users')->with('error', 'Unauthorized Page');
        // }

        $user->delete();
        return redirect('/users')->with('success', 'User Account Removed');
    }
}
