<?php

namespace App\Http\Controllers;

use App\User;

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
}
