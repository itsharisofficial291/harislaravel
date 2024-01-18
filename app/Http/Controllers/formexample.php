<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formexample extends Controller
{
   public function createform(Request $request){
    $this->validate(request(),[
        'email' => 'required || email',
        'password' => 'required',
        'checkbox' => 'required'


    ]);
   }
}
