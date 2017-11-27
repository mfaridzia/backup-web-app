<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting($id)
    {
        $user = User::find($id);
        return view('user.setting', compact('user'));
    }

}
