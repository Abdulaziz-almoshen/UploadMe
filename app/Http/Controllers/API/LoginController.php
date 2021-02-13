<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;

class LoginController extends Controller
{
   function __invoke(Request $request)
   {
       $this->validate($request,[
           'email' => 'required','email',
           'password' => 'required'
       ]);
       if (!auth()->attempt($request->only(['email','password']))) {
           throw new AuthenticationException();
       }
   }


}
