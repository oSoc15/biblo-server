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
        return view ("admin.tags.create")->with(array('tag'=>'name'));
    }

    public function storeTag() {
        $input = Request::all(); /*  haal alles af */
        $tag = new Tag(); /* variabele die nieuwe illustratie is */
        $tag->fill($input); /* vult variabele (die een illustratie is) met informatie die opgehaald wordt */
        $tag->save(); /* slaat variabele op */

        return redirect(route('tags.overview'));
    }

    public function removeTag($id) {
        $tag = tag::find($id);
        $tag->delete();
        return redirect(route('tags.overview'));
    }


}
