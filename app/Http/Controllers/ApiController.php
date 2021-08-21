<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ApiController extends Controller
{
    public function index()
    {
        $user = Participant::all();
        return $user;
    }
    public function show()
    {
        $id=auth()->user()->id;
        $participant = Participant::where('user_id',$id)->get();
        return response([
            'participant'=>$participant,
        ]);
    }
    public function insert(Request $req)
    {
        $user = new Participant();
        $id=auth()->user()->id;
        $user->p_name = $req->p_name;
        $user->f_name = $req->f_name;
        $user->school = $req->school;
        $user->p_age = $req->p_age;
        $user->p_contact = $req->p_contact;
        $user->user_id=$id;
        $user->save();
        return $user;
    }
    public function update(Request $req , $id)
    {
        $user = Participant::find($id);
        $user->p_name = $req->p_name;
        $user->f_name = $req->f_name;
        $user->school = $req->school;
        $user->p_age = $req->p_age;
        $user->p_contact = $req->p_contact;
        $user->save();
        return $user;
    }
    public function delete($id)
    {
        $user = Participant::find($id);
        $user->delete();
        return "Successfully deleted";
    }
}
