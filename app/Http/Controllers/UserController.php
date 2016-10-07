<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller {

	public function getem() {
		return User::all();
	}

}
