<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function dashboard() {
        return view ("admin.dashboard");
    }

    public function illustrations() {
        return view ("admin.illustrations");
    }

    public function analytics() {
        return view ("admin.analytics");
    }
}
