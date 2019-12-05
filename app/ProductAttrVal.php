<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttrVal extends Model {

    protected $table = 'au_product_attr_val';
    protected $guarded = ['id'];
    public  $timestamps = false;


}
