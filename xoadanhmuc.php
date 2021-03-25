<?php
		$conn = mysqli_connect("localhost","root","","myshop");
		$sql = "DELETE  FROM danhmuc WHERE id=".$_GET['id'];
		$ketnoi= mysqli_query($conn, $sql);
		header("location:danhmuc1.php");
?>