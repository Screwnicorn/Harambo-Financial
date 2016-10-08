<?php

namespace App;

use App\Group;
use App\User;
use Illuminate\Database\Eloquent\Model;

class GroupToUsers extends Model {

	public $timestamps = false;

	public function group() {
		return $this->hasOne('App\Group', 'id', 'group_id');
	}

	public function user() {
		return $this->hasOne('App\User', 'id', 'user_id');
	}
}
