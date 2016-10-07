<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function create(Request $request) {
		$user_id = Auth::user()->user_id;

		$group = new Group;
		$group->owner_id = $user_id;

		// complete generating stuff here ;)

		return back();
	}

	public function allGroups() {
		return Group::all();
	}

	public function myGroups() {
		Auth::user()->groupsOwned;
	}

	public function joinGroup() {
		Auth::user()->groupsJoined;
	}

	public function leaveGroup() {

	}

}
