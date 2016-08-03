<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table      = 'tbl_company';
	protected $primaryKey = 'com_id';
	protected $hidden     = array('pivot');

	public $timestamps    = false;



	public function getCompany($limit = 15)
	{
		return $this->where('com_show',0)->orderBy('com_id','desc')
					->with('contributor')
					->paginate($limit);
	}

	public function contributor()
	{
		// return $this->hasOne('App\Com_contribution','item_id','com_id');
		return $this->belongsTo(Contributor::class, 'com_id', 'item_id');
	}
}
