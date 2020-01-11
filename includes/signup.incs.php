<?php

	include_once 'dbh.incs.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$money = $_POST['money'];

	

	$sql = "INSERT INTO donations (user_first, user_last, user_email, user_number, user_money) VALUES ('$first', '$last', '$email', '$number','$money');";
		mysqli_query($conn, $sql);
	
		header("Location: ../donations.php?signup=success");
?>