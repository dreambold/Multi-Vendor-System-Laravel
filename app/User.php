<?php
namespace App;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentTaggable\Taggable;
use DB;



class User extends EloquentUser {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'users';

	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */
    use Taggable;

	protected $fillable = [];
	protected $guarded = ['id'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	* To allow soft deletes
	*/
	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $appends = ['full_name'];
    public function getFullNameAttribute()
    {
        return str_limit($this->first_name . ' ' . $this->last_name, 30);
    }

    public function getUserRoleName(){
        $roleUser = RoleUsers::find($this->id);
        if(!isset($roleUser['role_id'])) return "";
        $roles = Roles::find($roleUser['role_id']);
        if(!isset($roles['id'])) return "";
        return $roles['slug'];
    }

    public function getProductCount(){
        return Product::where(array("seller_id"=>$this->id, "state"=>"1"))->count();
    }

    public function getAvgMark(){
        return Order::whereRaw("eval_mark > 0")->avg('eval_mark');
    }

    public function getCartCount(){
        return UserBasket::where(array("user_id"=>$this->id,'immeditaly_type'=>0))->count();
    }

    public function getHomeStatisticsSellerInfo($now, $lastWeek, $lastMonth){
        $ret = array();
        $where = "a.role_id = 3 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') = '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['nowCount'] = $info[0]->cnt;
        $where = "a.role_id = 3 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') >= '".$lastWeek[2]."' AND DATE_FORMAT(b.created_at, '%Y-%m-%d') <= '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['weekCount'] = $info[0]->cnt;
        $where = "a.role_id = 3 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') >= '".$lastMonth[2]."' AND DATE_FORMAT(b.created_at, '%Y-%m-%d') <= '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['monthCount'] = $info[0]->cnt;
        return $ret;
    }

    public function getHomeStatisticsUserInfo($now, $lastWeek, $lastMonth){
        $ret = array();
        $where = "a.role_id = 2 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') = '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['nowCount'] = $info[0]->cnt;
        $where = "a.role_id = 2 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') >= '".$lastWeek[2]."' AND DATE_FORMAT(b.created_at, '%Y-%m-%d') <= '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['weekCount'] = $info[0]->cnt;
        $where = "a.role_id = 2 AND DATE_FORMAT(b.created_at, '%Y-%m-%d') >= '".$lastMonth[2]."' AND DATE_FORMAT(b.created_at, '%Y-%m-%d') <= '".$now."'";
        $sql = "SELECT COUNT(*) cnt FROM role_users a INNER JOIN users b ON  a.user_id = b.id  WHERE ".$where;
        $info = DB::select($sql);
        $ret['monthCount'] = $info[0]->cnt;
        return $ret;
    }


}
