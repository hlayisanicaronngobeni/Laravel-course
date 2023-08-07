<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Models\UserDetails;
use App\Models\UserUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
//    public function show()
//    {
//        return view('auth.index');
//    }
//    public function (AuthenticationRequest $request)
//    {
//        dd($request->all());
//        }
//    public function store(AuthenticationRequest $request)
//    {
//
//    }
    public function index()
    {
        return view('auth.index');
        $randomString = Str::random(length: 30);
        dd($randomString);
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
        ]);
        $userDetails = new UserDetails();
        $userDetails->first_name = $request->input('first_name');
        $userDetails->save();
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Your first name is required.',
            'first_name.min' => 'Name Must be 3 characters and above.',
        ];
    }
}


