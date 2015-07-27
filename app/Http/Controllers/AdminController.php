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
        $illustrations = Illustration::all();

        return view ("admin.illustrations.overview", compact('illustrations', 'tags'));
    }

    public function analytics() {
        return view ("admin.analytics");
    }

    public function createIllustration() {
        $tags = Tag::all();

        return view ("admin.illustrations.create", compact('tags'))->with(array('illustration'=>null));
    }

    public function storeIllustration() {
        $input = Request::all(); /*  haal alles af */
        $illustration = new Illustration(); /* variabele die nieuwe illustratie is */
        $illustration->fill($input); /* vult variabele (die een illustratie is) met informatie die opgehaald wordt */
        $illustration->save(); /* slaat variabele op */

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
        $illustration = Illustration::find($id);
        return view("admin.illustrations.create", compact('tags'))->with(array('illustration'=>$illustration));
    }

    public function updateIllustration($id) {
        $illustration = Illustration::find($id);
        $illustration->fill(Request::all());
        $illustration->save();

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
        return redirect(route('illustrations'));
    }


    public function tagsList() {
        $tags = Tag::all();

       return view ("admin.illustrations.create-tags", compact('tags'));
    }

}
