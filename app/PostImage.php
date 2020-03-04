<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model {
    
    
    protected $fillable = ['post_image_path', 'post_image_caption'];

    public function post () {
        return $this->belongsTo('App\Post');
    }
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model {
    
    
    protected $fillable = ['post_image_path', 'post_image_caption'];

    public function post () {
        return $this->belongsTo('App\Post');
    }
}
>>>>>>> 32a2d418a7784cdb7de25bd745cdd349b21309b6
