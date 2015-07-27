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
    /*public function __construct()
      {
          $this->middleware('auth');
      }*/


    public function overview() {
        $tags = Tag::all();

        return view ("admin.tags.overview", compact('tags'));
    }

    public function createTag(){
        return view ("admin.tags.create")->with(array('tags'=>'name'));
    }

    public function storeTag() {
        $input = Tag::all(); /*  haal alles af */
        $tag = new Tag(); /* variabele die nieuwe illustratie is */
        $tag->fill($input->name); /* vult variabele (die een illustratie is) met informatie die opgehaald wordt */
        $tag->save(); /* slaat variabele op */

        return redirect(route('tags.overview'));
    }


}
