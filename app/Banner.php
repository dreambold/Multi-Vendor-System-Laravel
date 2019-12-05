<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model {

    protected $table = 'au_banner';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }
}
