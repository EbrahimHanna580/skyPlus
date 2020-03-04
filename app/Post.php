<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    
    
    protected $fillable = [ 'title', 'short_description', 'body'];

    public function author() {
        return $this->belongsTo('App\User');
    }

    public function post_images() {
        return $this->hasMany('App\PostImage');
    }
}
