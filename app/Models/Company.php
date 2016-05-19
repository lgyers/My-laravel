<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table      = 'tbl_company';
	protected $primaryKey = 'com_id';
	protected $hidden     = array('pivot');
}
