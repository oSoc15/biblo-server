<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    //Fillable needs to include everything you want to create, or it won't work
    protected $fillable = array('name');



    public $timestaps = true;

    public function illustrations()
    {
        return $this->belongsToMany('App\Illustration');
    }
}
