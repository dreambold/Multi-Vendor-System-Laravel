<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function setTaskDeadlineAttribute($task_deadline)
    {
        if ($task_deadline) {
            $this->attributes['task_deadline'] = date('Y-m-d', strtotime(str_replace("-", "/", $task_deadline)));
        } else {
            $this->attributes['task_deadline'] = '';
        }
    }

    public function getTaskDeadlineAttribute()
    {
        $task_deadline = $this->attributes['task_deadline'];
        if ($task_deadline == "") {
            return "";
        } else {
            return date('Y-m-d', strtotime($task_deadline));
        }
    }
}