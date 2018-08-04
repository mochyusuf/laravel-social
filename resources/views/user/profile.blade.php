@extends('layouts.app')

<style>
    .profile-img{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
    }
</style>

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img class="profile-img" src="https://media.istockphoto.com/photos/businessman-silhouette-as-avatar-or-default-profile-picture-picture-id476085198?k=6&m=476085198&s=612x612&w=0&h=5cDQxXHFzgyz8qYeBQu2gCZq1_TN0z40e_8ayzne0X0=" alt="">
                    <h1>{{$user->name}}</h1>
                    <h5>{{$user->email}}</h5>
                    <h5>{{$user->dob->format('l j F Y')}} ({{$user->dob->age}})years</h5>

                    <button class="btn btn-success">Follow</button>
                </div>
            </div>
        </div>
    </div>
@endsection