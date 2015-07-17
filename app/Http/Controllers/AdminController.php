<?php

namespace App\Http\Controllers;

use App\Illustration;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

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

        return view ("admin.illustrations.overview", compact('illustrations'));
    }

    public function analytics() {
        return view ("admin.analytics");
    }

    public function createIllustration() {
        return view ("admin.illustrations.create")->with(array('illustration'=>null));
    }

    public function storeIllustration() {
        $input = Request::all();

        $illustration = new Illustration();
        $illustration->fill($input);
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

    public function editIllustration($id){
        $illustration = Illustration::find($id);
        return view("admin.illustrations.create")->with(array('illustration'=>$illustration));
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

    public function removeIllustration(){

    }

    public function sampleData(){
        $data = array(

            [
                'name'  => 'plaatje1',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'eten, meerdere dingen'
            ],

            [
                'name'  => 'plaatje2',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'pizza'
            ],

            [
                'name'  => 'plaatje3',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'scampi'
            ],

            [
                'name'  => 'plaatje3',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'test'
            ],

            [
                'name'  => 'plaatje4',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje5',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'leuk'
            ],

            [
                'name'  => 'plaatje6',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'eten, meerdere dingen'
            ],

            [
                'name'  => 'plaatje7',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'pizza'
            ],

            [
                'name'  => 'plaatje8',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'scampi'
            ],

            [
                'name'  => 'plaatje9',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'test'
            ],

            [
                'name'  => 'plaatje10',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje11',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'leuk'
            ],

            [
                'name'  => 'plaatje12',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje13',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje14',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje15',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje16',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

            [
                'name'  => 'plaatje17',
                'cover' => 'http://placehold.it/50x50',
                'tags'  => 'server'
            ],

        );


        return json_encode($data);





    }
}
