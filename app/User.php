<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'surname', 'accessLevel',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function groupsOwned() {
		return $this->hasMany('App\Group', 'owner_id');
	}

	public function groupsJoined() {
		return $this->hasMany('App\GroupToUsers', 'user_id');
	}

}
