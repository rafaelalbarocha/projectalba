<?php
	include 'db.php';
	$title=$_POST['title'];
	$note=$_POST['note'];
	$sql = "INSERT INTO `soccernews`( `title`, `note`) 
	VALUES ('$title','$note')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>