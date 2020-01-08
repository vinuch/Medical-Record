<?php
require 'DBConnect.php';

class InsertQuery extends DBConnect {
	public function insertHospital($hospitalName, $HospitalAddres, $gender) {
		$sql = "INSERT INTO odp_3(fullname, email, gender) VALUES(:fullname, :email, :gender)";
		// $query = PDO::prepare()
		$query = PDO::prepare($sql);
		$query->execute(['fullname'=>$fullname,'email'=>$email,'gender'=>$gender]);

		if ($query->errorCode() == 0) {
			return ['status'=>true, 'message'=>"Data Inserted Successfully"];
		} else {
			$message = $query->errorInfo();

			return ['status'=>false, 'message'=>"There was an error - " . $message[2]];
		}
	}

	public function addAdminAccount($fullname, $username, $password) {
		$sql = "INSERT INTO odp_admin(admin_name, admin_username, admin_password) VALUES (:name, :uname, :pword)";
		$query = PDO::prepare($sql);
		$query->execute([
			'name' => $fullname, 
			'uname' => $username, 
			'pword' => $password
		]);

		if ($query->errorCode() == 0) {
			return ['status'=>true, 'message'=>"Admin created Successfully"];
		} else {
			$message = $query->errorInfo();

			return ['status'=>false, 'message'=>"There was an error - " . $message[2]];
		}
	}
}
?>