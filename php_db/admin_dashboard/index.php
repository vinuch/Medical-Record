<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<h2>Welcome Admin, kindly login</h2>
	<form method="POST">
		<?php
		if (isset($_POST['btnLogin'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			require '../db_query/SelectQuery.php';

			$selectQuery = new SelectQuery;
			$response = $selectQuery->adminLogin($username);

			if ($response['status'] == 2) {
				$data = $response['message'];

				if (!password_verify($password, $data['admin_password'])) {
					echo "Invalid Login Details";
				} else if (!$data['admin_status']) {
					echo "Your account is currently disabled";
				} else {
					$_SESSION['loggedInUser'] = $data;

					header('location:welcome.php');
				}
			} else {
				echo $response['message'];
			}
		}
		?>
		<div>
			<label>Username</label>
			<input type="text" name="username" value="<?=isset($username) ? $username : ''?>">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div>
			<button type="submit" name="btnLogin">Login</button>
		</div>
	</form>
</body>
</html>