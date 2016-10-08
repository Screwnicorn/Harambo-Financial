<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		if (Auth::check()) {

			$mygroupsowner = Auth::user()->groupsOwned;
			$mygroupsjoined = Auth::user()->getUserToGroup;

			// bad code :(
			foreach ($mygroupsjoined as $m) {
				$m->group;
			}

			return view('main/home', compact('mygroupsowner', 'mygroupsjoined'));
		}
		return redirect('/login');
	}
}
