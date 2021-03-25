<?php
		$conn = mysqli_connect("localhost","root","","myshop");
		$sql = "DELETE  FROM hanghoa WHERE id=".$_GET['id'];
		$ketnoi= mysqli_query($conn, $sql);
		header("location:hanghoa_admin.php");
?>