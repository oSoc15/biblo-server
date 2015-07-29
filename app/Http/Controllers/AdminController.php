<?php

namespace App\Http\Controllers;

use App\Illustration;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Tag;

class AdminController extends Controller
{
  /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function index() {
        return view ("admin.index");
    }

    public function dashboard() {
        return view ("admin.dashboard");
    }

    public function illustrations() {
        $illustrations = Illustration::all()->load('tags');

        return view ("admin.illustrations.overview", compact('illustrations', 'tags'));
    }

    public function createIllustration() {
        $tags = Tag::all();
        $edit = false;
        return view ("admin.illustrations.create", compact('tags', 'edit'))->with(array('illustration'=>null));
    }

    public function storeIllustration() {
        $input = Request::all(); /*  haal alles af */
        $illustration = new Illustration(); /* variabele die nieuwe illustratie is */
        $illustration->fill($input); /* vult variabele (die een illustratie is) met informatie die opgehaald wordt */
        $illustration->save(); /* slaat variabele op */

        if(array_key_exists('tags',$input)){
            $tags = $input["tags"];
            foreach($tags as $tag){
                $illustration->tags()->attach($tag);
            }
        }


        if(Request::hasFile('image') && Request::file('image')->getClientOriginalExtension() == "png")
        {
            $imageName = $illustration->id . '.png';
            Request::file('image')->move(
                base_path() . '/public/images/', $imageName
            );
        }

        return redirect(route('illustrations'));
    }

    public function editIllustration($id){
        $tags = Tag::all();
        $illustration = Illustration::find($id)->load('tags');
        $edit = true;
        return view("admin.illustrations.create", compact('tags','edit'))->with(array('illustration'=>$illustration));
    }

    public function updateIllustration($id) {
        $input = Request::all(); /*  haal alles af */

        $illustration = Illustration::find($id);
        $illustration->fill($input); /* vult variabele (die een illustratie is) met informatie die opgehaald wordt */
        $illustration->save(); /* slaat variabele op */
        //$illustration->tags()->delete();

        \DB::table('illustration_tag')->where('illustration_id', '=', $illustration->id)->delete();

        if(array_key_exists('tags',$input)){
            $tags = $input["tags"];

            foreach($tags as $tag){
                $illustration->tags()->attach($tag);
            }
        }

        if(Request::hasFile('image') && Request::file('image')->getClientOriginalExtension() == "png")
        {
            $imageName = $illustration->id . '.png';
            Request::file('image')->move(
                base_path() . '/public/images/', $imageName
            );
        }

        return redirect(route('illustrations'));
    }

    public function removeIllustration($id){
        $illustration = Illustration::find($id);
        $illustration->delete();

        //@TODO: Delete $id.png -> image

        $imageName = $illustration->id . '.png';


        return redirect(route('illustrations'));
    }



}
