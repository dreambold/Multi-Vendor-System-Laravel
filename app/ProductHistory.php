<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model {

    protected $table = 'au_user_product_history';
    protected $guarded = ['id'];
    public  $timestamps = false;


}
