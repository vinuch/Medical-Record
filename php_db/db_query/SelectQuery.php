<?php
require 'DBConnect.php';

class SelectQuery extends DBConnect {
	public function adminLogin($username) {
		$sql = "SELECT * FROM odp_admin WHERE admin_username = :uname";
		$query = PDO::prepare($sql);
		$query->execute(['uname'=>$username]);

		if ($query->errorCode() == 0) {
			if ($query->rowCount() == 0) {
				return ['status'=>1, 'message'=>"Invalid Username"];
			} else {
				$data = $query->fetch(PDO::FETCH_ASSOC);

				return ['status'=>2, 'message'=>$data];
			}
		} else {
			$message = $query->errorInfo();

			return ['status'=>0, 'message'=>"There was an error - " . $message[2]];
		}
	}

	public function fetchAllParticipants() {
		$sql = "SELECT * FROM odp_3";
		$query = PDO::prepare($sql);
		$query->execute();

		if ($query->errorCode() == 0) {
			$data = $query->fetchAll(PDO::FETCH_BOTH);

			return ['status'=>1, 'data' => $data];
		} else {
			$message = $query->errorInfo();

			return ['status'=>0, 'message'=>"There was an error - " . $message[2]];
		}
	}
}
?>