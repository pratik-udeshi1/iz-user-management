<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return view('userList', ['users' => $users]);
    }

    /**
     * Create or Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:40',
            'email' => 'email|max:40',
            'city' => 'max:20',
            'phone' => 'max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->all(), 400);
        }

        $userData = request()->except(['_token']);
        $user_id = $request->user_id ?? null;

        /////////////////////////////////////////////////////
        // Adding new user, or updating if already exist.. //
        /////////////////////////////////////////////////////
        User::updateOrCreate(['id' => $user_id], $userData);

        return response()->json('success!', 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();
        return response()->json($user);
    }
}
