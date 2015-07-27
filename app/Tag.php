<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    public $timestaps = true;

    public function illustrations()
    {
        return $this->belongsToMany('App\Illustration');
    }
}
