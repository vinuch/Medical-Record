<?php
session_start();

if (!isset($_SESSION['loggedInUser']))
	header("location:index.php");

$loggedInAdmin = $_SESSION['loggedInUser'];

require '../db_query/SelectQuery.php';

$selectQuery = new SelectQuery;

$response = $selectQuery->fetchAllParticipants();

if (!$response['status']) {
	echo $response['message'];
} else {
	$data = $response['data'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Participants</title>
</head>
<body>
	Welcome back <?=$loggedInAdmin['admin_username']?> | <a href="logout.php">Logout</a>
	<h2>All Participants</h2>

	<?php
	if (count($data) == 0) {
		echo "No registered ODP 3 Participant yet";
	} else {
	?>
	<table border="1">
		<tr>
			<td>S/No</td>
			<td>Fullname</td>
			<td>Email</td>
			<td>Gender</td>
		</tr>
		<?php
		$sno = 0;
		foreach ($data as $odp):
			$sno++;
		?>
		<tr>
			<td><?=$sno?></td>
			<td><?=$odp['fullname']?></td>
			<td><?=$odp['email']?></td>
			<td><?=$odp['gender']?></td>
		</tr>
		<?php
		endforeach;
		?>
	</table>
	<?php
	}
	?>
</body>
</html>
<?php
}
?>