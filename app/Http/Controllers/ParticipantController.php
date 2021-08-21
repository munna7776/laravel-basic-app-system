<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    protected function store(Request $req)
    {
        $req->validate([
            'p_name'=>'required|string',
            'f_name'=>'required|string',
            'school'=>'required|string',
            'p_age'=>'required',
            'p_contact'=>'required'
        ]);
        $part = new Participant();
        $part['user_id']=auth()->user()->id;
        $part['p_name']=$req->input('p_name');
        $part['f_name']=$req->input('f_name');
        $part['school']=$req->input('school');
        $part['p_age']=$req->input('p_age');
        $part['p_contact']=$req->input('p_contact');
        $part->save();
        return redirect('/');
    }
}

