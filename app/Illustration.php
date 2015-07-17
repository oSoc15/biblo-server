<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
  protected $table = 'illustrations';
    protected $fillable = array('name');


  public $timestaps = true;

  public function tags()
  {
      return $this->belongsToMany('App\Tag');
  }

  public function answers()
  {
      return $this->hasMany('App\Like');
  }
}
