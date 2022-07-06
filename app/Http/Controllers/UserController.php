<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class UserController extends Controller
{
    public function login(Request $request, User $user)
    {
       //dd($request->input());
        return $request->input();
    }
}
