<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function create() {

		return view('main.groups.add');
	}

	public function add(Request $request) {

		$this->validate($request, [
			'name' => 'required|max:255|min:3|unique:groups',
		]);

		return Auth::user()->saveGroup($request);
	}

	public function allGroups() {
		return Group::all();
	}

	public function myGroups() {
		$groups = Auth::user()->groupsOwned;
		return view('main.groups.groups', compact('groups'));
	}

	public function view($id) {
		$g = Group::find($id);
		$users = $g->getAllUsers();
		return view('main.groups.individual', compact('users', 'g'));
	}

	public function joinGroup() {
		Auth::user()->groupsJoined;
	}

	public function leaveGroup() {

	}

}
