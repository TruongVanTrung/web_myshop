<?php
	include'connect.php';
	$sql = "DELETE  FROM user WHERE id=".$_GET['id'];
	$query= $conn->query($sql);
	header("location:tables.php");
?>