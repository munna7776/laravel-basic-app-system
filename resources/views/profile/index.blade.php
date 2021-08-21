@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #fff;">
        <div class="card">
            <div class="card-header text-center">
                Profile's Information
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">Name</h5>
                <div class="card-title" style="width:80%;margin-left: 10rem;">{{$user->name}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">E-mail</h5>
                <div class="card-title" style="width:80%;margin-left: 10rem;">{{$user->email}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">Country</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->country}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">State</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->state}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">City</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->city}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">Age</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->age}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">Gender</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->gender}}</div>
            </div>
            <div class="card-body d-flex ms-2">
                <h5 class="card-title" style="width: 20%;">Contact</h5>
                <div class="card-title" style="width: 80%;margin-left: 10rem;">{{$user->phone}}</div>
            </div>
        </div>
        <!-- <div class="d-flex justify-content-center mt-2">
            <a href="" role="button" class="btn btn-primary mx-auto">Edit Profile</a>
        </div> -->
        <a href="profile/{{$user->id}}/edit" role="button" class="btn btn-primary d-block mx-auto mt-2 fw-bold">Edit Profile</a>
    </div>
@endsection
