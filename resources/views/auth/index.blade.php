@extends('layouts.master')

@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}" class="container">
        @csrf
        <div class="header">
            <p>Hi <b>Bandy</b></p>
        </div>
        <div class="text" style="font-size: 20px">Would you like to connect with us?<br>We'll cook you some good food.</div>
        <div>
            <label style="font-size: 15px">
                <input type="text" name="first_name" placeholder="Fill in your first name" style="font-size: 15px"/>
                @error('first_name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </label>
            </div>
        <div>
            <button class="submit"><i class="fa fa-spotify"></i>
                <img src="{{ asset('spotify_icon.svg') }}" id="spotify" alt="Connect spotify" />
                <span style="vertical-align: sub;">Connect spotify</span>
            </button>
        </div>
    </form>
@endsection
