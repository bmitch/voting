<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['title', 'slug', 'colour'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
