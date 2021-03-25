<?php
	$name_user = $_GET['namedanhmuc'];
	$id = $_GET['id'];
		if($_SERVER["REQUEST_METHOD"] == "GET"){
			$conn= mysqli_connect("localhost","root","","myshop");
			$sql = "UPDATE danhmuc SET tendanhmuc = '$namedanhmuc' WHERE id='$id'";
			$query= mysqli_query($conn, $sql);
		}
	header("location:danhmuc1.php");
?>