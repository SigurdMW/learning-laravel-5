<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'excerpt',
    	'published_at',
        'user_id' //for now its possible to set user_id via the form. NOT TO BE USED IN PRODUCTION!
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    //naming convention: set {{name of field}} attribute
    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    //an article is owned by a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
