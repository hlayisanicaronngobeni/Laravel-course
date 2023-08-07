<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class RedirectionController extends Controller
{
    public function show()
    {
        return view('redirection/success');
        return view('redirection/failed');
    }
    public function successPage(Request $request)
    {
        return view('redirection/success');
    }
    public function failedPage(Request $request)
    {
        return view('redirection/failed');
    }
}
