<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class task1 extends Controller
{
    public function index(Request $request)
    {
     $username = $request->input('email');
     $password = $request->input('password');

        $users = task::all();
        $username1 = false;
        $password1 = false;
        foreach($users as $user){
        if ($user["email"]==$username) {
        $username1 = true;
        }
        }
        if ($username1) {
            foreach($users as $user){
            if ($user["password"]==$password) {
                $password1 = true;
                }
        }}

        if($username1 && $password1){

            return view('taskhome');
        }else{
            echo " <script> swal('Good job!', 'You clicked the button!', 'error'); </script>";
            // echo '<div class="alert alert-danger" style="text-align: center;" role="alert">3LLAWY <p>بيسلم عليك</p></div>';
            return view('tasklogin');
        }




// return view("index",$request->email);

    }


}





