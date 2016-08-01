<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $table      = 'tbl_contribution';
	protected $primaryKey = 'contribution_id';
	protected $hidden     = array('pivot');
}
