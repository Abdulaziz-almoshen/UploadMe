<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function __invoke(Request $request)
   {
       return auth()->guard('web')->logout();
   }
}
