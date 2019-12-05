<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProductHistory extends Model {

    protected $table = 'au_user_product_history';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    public function product() {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
