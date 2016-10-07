<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
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

	public function saveGroup(Request $request) {
		$g = new Group;
		$g->owner_id = $this->id;
		$g->name = $request['name'];
		$g->verif = Group::generateCode(7);
		$g->save();
		$this->addRelationshipToGroup($g);
		return $g->id;

	}

	public function addRelationshipToGroup(Group $g) {
		$gtu = new GroupToUsers;
		$gtu->user_id = $this->id;
		$gtu->group_id = $g->id;
		$gtu->save();
	}

	public function groupsOwned() {
		return $this->hasMany('App\Group', 'owner_id');
	}

	public function groupsJoined() {
		return $this->hasMany('App\GroupToUsers', 'user_id');
	}

	public function entrys() {
		return '';
	}

}
