<?php
require 'db_query/InsertQuery.php';

$fullnameErr = ""; $genderErr = ""; $emailErr = "";

function sanitizeInputs($value) {
	$value = trim($value);
	$value = htmlentities($value);
	$value = htmlspecialchars($value);
	$value = stripslashes($value);

	return $value;
}

if (isset($_POST['btnSubmit'])) {
	$fullname = sanitizeInputs($_POST['fullname']);
	$gender = sanitizeInputs($_POST['gender']);
	$email = sanitizeInputs($_POST['email']);

	if (empty($fullname)):
		$fullnameErr = "Fullname is either empty";
	elseif (str_word_count($fullname) < 2):
		$fullnameErr = "Fullname should contain firstname and lastname.";
	endif;

	if (empty($gender)):
		$genderErr = "Gender is required.";
	endif;

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
		$emailErr = "Invalid email address.";
	endif;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<?php
	if (!isset($_POST['btnSubmit']) or (isset($_POST['btnSubmit']) and (!empty($fullnameErr) or !empty($emailErr) or !empty($genderErr)))) {
	?>
	<form method="POST" action="">
		<div>
			<label>Fullname</label>
			<input type="text" required name="fullname" value="<?=isset($fullname) ? $fullname : ''?>">
			<span><?=$fullnameErr?></span>
		</div>
		<div>
			<label>Gender</label>
			<select name="gender" required>
				<option value="">--Select--</option>
				<option>Male</option>
				<option>Female</option>
			</select>
			<span><?=$genderErr?></span>
		</div>
		<div>
			<label>Email Address</label>
			<input type="email" name="email" required  value="<?=isset($email) ? $email : ''?>">
			<span><?=$emailErr?></span>
		</div>
		<div>
			<button type="submit" name="btnSubmit">Register</button>
		</div>
	</form>

	<?php
	}

	if (isset($_POST['btnSubmit']) and empty($fullnameErr) and empty($emailErr) and empty($genderErr)) {
		$insertQuery = new InsertQuery;
		$response = $insertQuery->insertODP3Participant($fullname, strtolower($email), $gender);

		if (!$response['status']) {
			echo "We had a technical issue, please go back try again";
		} else {
	?>
	<div>
		<h2>My Submitted Data</h2>
		<div>Fullname: <?=$fullname?></div>
		<div>Gender: <?=$gender?></div>
		<div>Email Address: <?=$email?></div>
	</div>
	<?php
		}
	}
	?>
</body>
</html>