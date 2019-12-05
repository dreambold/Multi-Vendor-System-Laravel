<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model {

    protected $table = 'role_users';
    protected $guarded = ['user_id'];
    public  $timestamps = false;
    protected $primaryKey = "user_id";

    function getSellerList(){
        return $this->where(array("role_id"=>3))->orderBy("user_id")->get();
    }

    function getRecentSellerList(){
        return $this->where(array("role_id"=>3))->orderBy("created_at", "DESC")->take(20)->get();
    }

    function getRecentUserList(){
        return $this->where(array("role_id"=>2))->orderBy("created_at", "DESC")->take(20)->get();
    }

    public function user(){
        return  $this->hasOne('App\User', 'id', 'user_id');
    }
}
