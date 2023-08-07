@extends('layouts.master')

@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('failed.page') }}" class="container">
        @csrf
        <div class="header">
            <img src="{{ asset('cm.svg') }}" id="cm" alt="spotify"/>
            <span style="vertical-align: sub; color: #ff485d;">----<b>x</b></span>
            <div><img src="{{ asset('spotify.svg') }}" id="cm" alt="cm"/></div>
        </div>
        <div class="text" style="font-size: 30px">Whoops!</div>
        <div class="text" style="font-size: 20px">We couldn't connect your spotify account.<br>Please try again later</div>
        <div>
            <button class="try_again"><i class="fa fa-try-again"></i>
                <img src="{{ asset('reset.png') }}" id="try_again" alt="Try again" />
                <span style="vertical-align: sub;">Try again</span>
            </button>
        </div>
    </form>
@endsection
