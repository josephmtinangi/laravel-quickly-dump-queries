<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tags()
    {
    	return $this->morphyToMany('App\Tag', 'taggable');
    }
}
