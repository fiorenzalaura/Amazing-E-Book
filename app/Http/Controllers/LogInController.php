<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    //
    public function indexLogin()
    {
        return view('auth.login');
    }
}
