<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table      = 'tbl_company';
	protected $primaryKey = 'com_id';
	protected $hidden     = array('pivot');

	public function contributor()
	{
		return $this->hasOne('App\Com_contribution','item_id','com_id');
	}
}
