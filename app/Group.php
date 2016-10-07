<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {
	public static function generateCode($len) {
		$inviteCode = "";
		$characters = "0123456789abcdefghijklmnopqrstuvwxyzz";
		for ($p = 0; $p < $len; $p++) {
			$inviteCode .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		return $inviteCode;
	}

	public function getGroupToUsers() {
		return $this->hasMany('App\GroupToUsers', 'group_id');
	}

	public function getAllUsers() {
		$gts = $this->getGroupToUsers;

		foreach ($gts as $g) {
			$g->user;
		}

		return $gts;

	}

}
