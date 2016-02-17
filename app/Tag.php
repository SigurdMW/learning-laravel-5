<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    // A tag may appear in many articles
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
