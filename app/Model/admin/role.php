<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{

	public function permissions()
	{
    	return $this->belongstoMany('App\Model\admin\permission','permission_roles');
	}
}
