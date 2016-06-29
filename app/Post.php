<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
    	'title','content'
    ];

    public function categories(){

    	return $this->belongsToMany('App\Category');

    }

    public function getCategoryIdAttribute(){

    	return $this->categories()->lists('id')->all();
    }
}

