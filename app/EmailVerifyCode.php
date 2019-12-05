<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailVerifyCode extends Model {

    protected $table = 'au_email_verify_code';
    protected $guarded = ['id'];
    public  $timestamps = true;

    static public  function isDelete($id){
        return true;
    }
}
