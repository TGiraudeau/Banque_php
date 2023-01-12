<?php

class User {
	public $id;
	public $phone;
	public $email;
	public $fullname;
	public $password;
	public $role;

	public static function create($fullname, $email, $phone, $password, $role = 1) {
		$user = new User();
		$user->phone = $phone;
		$user->email = $email;
		$user->fullname = $fullname; 
		$user->password = hash('sha256', $password);
		$user->role = $role;
		return $user;
	}

	public function verifyPassword($password) {
		$hashPassword = hash('sha256', $password);
		return ($hashPassword === $this->password);
	}

}