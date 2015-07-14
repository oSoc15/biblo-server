<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = true;

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
