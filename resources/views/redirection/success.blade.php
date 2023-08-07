@extends('layouts.master')

@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('success.page') }}" class="container">
        @csrf
        <div class="header">
            <p><b>Success!</b></p>
        </div>
        <div class="text" style="font-size: 20px">You successfully connected to Spotify</div>
            <div class="success"><i class="check"></i>
                <img src="{{ asset('tick.svg') }}" id="success" alt="Connected with spotify" />
                <span style="vertical-align: sub;" >Connected with spotify</span>

            </div>
        </div>
    </form>
@endsection

