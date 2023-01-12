<?php

class User {
	public $id;
	public $phone;
	public $email;
	public $fullname;
	public $password;
	public $role;

	public static function create($fullname, $email, $phone, $password, $role) {
		$user = new User();
		$user->fullname = $fullname;
		$user->email = $email;
		$user->phone = $phone;
		$user->password = hash('sha256', $password);
		$user->role = $role;
		return $user;
	}

	public function verifyPassword($password) {
		$hashPassword = hash('sha256', $password);
		return ($hashPassword === $this->password);
	}

}