<?php

namespace App\Http\Controllers;

use DB;
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
        $tags = DB::table('tags')->orderBy('name', 'asc')->get();

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

    public function editTag($id){
        $tag = Tag::find($id);
        return view("admin.tags.create")->with(array('tag'=>$tag));
    }

    public function updateTag($id){
        $tag = Tag::find($id);
        $tag->fill(Request::all());
        $tag->save();

        return redirect(route('tags.overview'));
    }


}
