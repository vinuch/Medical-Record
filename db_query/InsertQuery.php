<?php
require 'DBConnect.php';

class InsertQuery extends DBConnect {
	public function insertHospital($hospitalName, $HospitalAddress, $city, $state, $hospitalPhone) {
		$sql = "INSERT INTO registered_hospitals(HospitalName, hospitalAddress, city, state, hospitalPhone) VALUES(:hname, :haddress, :city, :state, :hphone)";
		// $query = PDO::prepare()
		$query = PDO::prepare($sql);
		$query->execute(['hname'=>$hospitalName,'haddress'=>$HospitalAddress,'city'=>$city, 'state'=>$state, 'hphone'=> $hospitalPhone]);

		if ($query->errorCode() == 0) {
			return ['status'=>true, 'message'=>"Data Inserted Successfully"];
		} else {
			$message = $query->errorInfo();

			return ['status'=>false, 'message'=>"There was an error - " . $message[2]];
		}
	}

	// public function addAdminAccount($fullname, $username, $password) {
	// 	$sql = "INSERT INTO odp_admin(admin_name, admin_username, admin_password) VALUES (:name, :uname, :pword)";
	// 	$query = PDO::prepare($sql);
	// 	$query->execute([
	// 		'name' => $fullname, 
	// 		'uname' => $username, 
	// 		'pword' => $password
	// 	]);

	// 	if ($query->errorCode() == 0) {
	// 		return ['status'=>true, 'message'=>"Admin created Successfully"];
	// 	} else {
	// 		$message = $query->errorInfo();

	// 		return ['status'=>false, 'message'=>"There was an error - " . $message[2]];
	// 	}
	// }
}
?>