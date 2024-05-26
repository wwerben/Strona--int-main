<?php
  require_once 'db.php';

	class Model {
		private $db;

		public function __construct(){
			$this->db = dbConnect();
		}

		public function saveData($email, $passhashed, $firstName, $lastName, $region, $phoneNumber){
			$stmt = $this->db->prepare('INSERT INTO user (email, password, firstName, lastName, region, phoneNumber) VALUES (?, ?, ?, ?, ?, ?)');
			$stmt->bind_param('ssssss', $email, $passhashed, $firstName, $lastName, $region, $phoneNumber);
			$stmt->execute();
			$stmt->close();
		}

		public function getPassHashed($email) {
			$stmt = $this->db->prepare('SELECT password FROM user WHERE email = ?');
			$stmt->bind_param('s', $email);
			$stmt->execute();
			$stmt->bind_result($passhashed);
		
			if ($stmt->fetch()) {
				$stmt->close();
				return $passhashed;
			} else {
				$stmt->close();
				return null;
			}
		}
		
		public function getUserRole($email) {
			$stmt = $this->db->prepare('SELECT role FROM user WHERE email = ?');
			$stmt->bind_param('s', $email);
			$stmt->execute();
			$stmt->bind_result($role);
		
			if ($stmt->fetch()) {
				$stmt->close();
				return $role;
			} else {
				$stmt->close();
				return null;
			}
		}
		


	}
?>