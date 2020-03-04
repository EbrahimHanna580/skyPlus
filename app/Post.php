<<<<<<< HEAD
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
=======
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
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
