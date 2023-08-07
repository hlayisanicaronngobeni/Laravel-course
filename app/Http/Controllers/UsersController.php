<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Models\SocialIntegration;
use App\Models\UserUsers;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show()
    {
        return view('auth.index');
    }
    public function submitData(AuthenticationRequest $request)
    {
        dd($request->all());
    }
    public function getAllUsers()
    {
        $users = UserUsers::all();
    }
}
