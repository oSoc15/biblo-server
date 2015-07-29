<?php

namespace App\Http\Controllers;

use App\Illustration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function charts() {
        $illustrations = Illustration::all();

        return view ("admin.charts.overview", compact('illustrations'));
    }
}
