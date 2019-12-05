<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model {

    protected $table = 'au_product_description';
    protected $guarded = ['id'];
    public  $timestamps = false;


}
