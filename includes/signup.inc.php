<?php

	include_once 'dbh.inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	

	$sql = "INSERT INTO contact (user_first, user_last, user_email, user_message) VALUES ('$first', '$last', '$email', '$message');";
		mysqli_query($conn, $sql);
	
		header("Location: ../contact.php?signup=success");
?>