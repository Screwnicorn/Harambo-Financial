<?php

namespace App;

use App\GroupToUsers;
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
		'name', 'email', 'password', 'surname', 'accessLevel', 'slug',
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
		$g->slug = str_slug($request['name'], ".");
		$g->save();
		$this->addRelationshipToGroup($g);
		return $g;

	}

	public function addRelationshipToGroup(Group $g) {
		$gtu = new GroupToUsers;
		$gtu->user_id = $this->id;
		$gtu->group_id = $g->id;
		$gtu->save();
	}

	public function getUserToGroup() {
		return $this->hasMany('App\GroupToUsers', 'user_id');
	}

	public function groupsOwned() {
		return $this->hasMany('App\Group', 'owner_id');
	}

	public function groupsJoined() {
		// This need refactoring very bad code :(
		$gts = $this->getUserToGroup();

		return $gts;
	}

	public function entrys() {
		return '';
	}

}
