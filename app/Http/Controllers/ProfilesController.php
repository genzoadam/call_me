<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function profile()
    {
    	return view('profile.index');
    }

    public function __construct()
    {
    	$this->middleware('auth');
    }
}
