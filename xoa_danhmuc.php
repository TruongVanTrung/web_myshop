<?php
		$conn = mysqli_connect("localhost","root","","myshop");
		$sql = "DELETE  FROM loaihang WHERE id=".$_GET['id'];
		$ketnoi= mysqli_query($conn, $sql);
		header("location:danhmuc.php");
?>