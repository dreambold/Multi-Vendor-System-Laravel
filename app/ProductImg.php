<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model {

    protected $table = 'au_product_img';
    protected $guarded = ['id'];
    public  $timestamps = false;


}
