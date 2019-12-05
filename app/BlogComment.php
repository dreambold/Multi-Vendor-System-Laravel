<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComment extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'blog_comments';

    protected $guarded = ['id'];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
