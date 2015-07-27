<?php

namespace App\Http\Controllers;


use App\Illustration;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Tag;

class TagsController extends Controller
{
    public function __construct()
      {
          $this->middleware('auth');
      }


    public function tagsList() {
        $tags = Tag::all();

        return view ("admin.illustrations.tags-list", compact('tags'));
    }
}
