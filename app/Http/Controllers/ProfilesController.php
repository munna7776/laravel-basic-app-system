<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('profile.index',[
            'user'=>$user
        ]);
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
        //
    }

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
        $id = auth()->user()->id;
        $user = User::find($id);
        return view('profile.update',[
            'user'=>$user
        ]);
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
        $id = auth()->user()->id;
        $request->validate([
            'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z\s]+)(\d+)?$)/u'],
            'country'=>'required|not_in:Select Country',
            'state'=>'required|not_in:Select State',
            'city'=>'required|not_in:Select City',
            'phone'=>'required|min:10|max:11',
            'age'=>'required',
            'gender'=>'required|in:Male,Female,Other',
        ]);
        $user = User::where('id',$id)->update([
            'name'=>$request->input('name'),
            'country'=>$request->input('country'),
            'state'=>$request->input('state'),
            'city'=>$request->input('city'),
            'age'=>$request->input('age'),
            'gender'=>$request->input('gender'),
            'phone'=>$request->input('phone'),
        ]);
        // return view('profile.index');
        // return $user;
        return redirect('/profile');
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
