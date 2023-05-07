<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function login()
    {
        return view('UserRegistration.login');
    }
}
