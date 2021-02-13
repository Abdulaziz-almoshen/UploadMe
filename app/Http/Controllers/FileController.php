<?php

namespace App\Http\Controllers;

use App\Traits\APIResponse;
use Illuminate\Http\Request;
use App\Http\Resources\File\FileResource;

class FileController extends Controller
{
    use APIResponse;

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
    public function index(Request $request) {
       return  $this->success( FileResource::collection($request->user()->files),200,'files uploaded');
    }

    
}
