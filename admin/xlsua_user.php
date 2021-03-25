<?php
	$name_user = $_GET['name_user'];
	$pass_user = $_GET['pass_user'];
	$role = $_GET['role'];
	$id = $_GET['edit_id'];
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			$conn= mysqli_connect("localhost","root","","myshop");
			$sql = "UPDATE user SET username = '$name_user',password='$pass_user',idrole='$role' WHERE id='$id'";
			$query= mysqli_query($conn, $sql);
		}
	header("location:tables.php");
?>