<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserSaveSeller extends Model {

    protected $table = 'au_user_save_seller';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    function seller(){
        return  $this->hasOne('App\User', 'id', 'seller_id');
    }


}
