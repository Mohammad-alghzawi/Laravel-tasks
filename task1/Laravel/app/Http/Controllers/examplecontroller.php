<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examplecontroller extends Controller
{
    public function example_fun(){
        $arr = array(1,2,'ghzawi',4,5,6);
        return view ('example' , compact('arr'));
    }
}
