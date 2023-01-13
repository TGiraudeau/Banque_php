<?php

class UserManager {
	private $db;

	function __construct($db) {
		$this->db = $db;
	}

	public function insert(User $user) {
		$stmh = $this->db->prepare('INSERT INTO users(fullname, email, phone, password, role) VALUES(?, ?, ?, ?, ?)');
		$stmh->execute([
			$user->fullname, $user->email, $user->phone, $user->password, $user->role
		]);
		return $this->db->lastInsertId();
	}

	public function getByEmail($email) {
		$stmh = $this->db->prepare('SELECT * FROM users WHERE email = ?');
		$stmh->execute([$email]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
		$user = $stmh->fetch();
		return $user;
	}

	public function getById($id) { 
		$stmh = $this->db->prepare('SELECT * FROM users WHERE id = ?');
		$stmh->execute([$id]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
		$user = $stmh->fetch();
		return $user;
	}

	public function save_contact_form($Full_name, $phone, $email, $message) {
		$stmh = $this->db->prepare('INSERT INTO contact_forms(fullname, phone, email, message) VALUES(:fullname, :phone, :email, :message)');
		$stmh->execute([
	 		'fullname' => $Full_name,
	 		'phone' => $phone,
	 		'email' => $email,
	 		'message' => $message
	 	]);
	 }

	 public function get_forms() {
	 	$stmh = $this->db->prepare("SELECT * FROM contact_forms");
	 	$stmh->execute();

	 	$forms = $stmh->fetchAll(PDO::FETCH_CLASS, 'ContactForm');
	 	return $forms;

		
	 }
	 public function take_user() { 
		$stmh = $this->db->prepare('SELECT DISTINCT * FROM users WHERE role = 1');
		$stmh->execute();
		$donnees = $stmh->fetchAll(PDO::FETCH_CLASS,'user');
		return $donnees;
	}


	public function update_role($id, $role){
    $stmh = $this -> db -> prepare('UPDATE `users` SET `role`=? WHERE id =?');
    $stmh->execute([
        $role,
        $id
    ]);
    }

}
