<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $table = 'likes';

  public $timestaps = true;

  protected $fillable = array('liked');

  public function illustration()
  {
    return $this->belongsTo('App\Illustration');
  }
}
