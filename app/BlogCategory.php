<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'blog_categories';

    protected $guarded = ['id'];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

}
