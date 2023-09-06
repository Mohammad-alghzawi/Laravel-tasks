<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
// use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        // $phone = User::find(1)->phone;
        // dd($phone);
        $user = Phone::find(1)->user;
                dd($user);
        return view('welcome');
    }
}
