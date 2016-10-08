<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller {

	public function getem() {
		return User::all();
	}

	public function view($slug) {
		$user = User::where('slug', $slug)->first();

		return $user;
	}

}
