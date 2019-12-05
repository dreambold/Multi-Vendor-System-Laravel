<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatable extends Model
{
    protected $table = 'datatables';

    protected $guarded  = ['id'];

}
