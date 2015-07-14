<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    //

    public function overview(){
      return view(API.overview);
    }

    public function recommendations(){
      return "recommendations";
    }
}
