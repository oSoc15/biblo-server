<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
  protected $table = 'illustrations';
  public $timestaps = true;

  public function tags()
  {
      return $this->belongsToMany('App\Tag');
  }

  public function create(){

  }
}
