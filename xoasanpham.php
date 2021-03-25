<?php
		$conn = mysqli_connect("localhost","root","","myshop");
		$sql = "DELETE FROM hanghoa WHERE id=".$_GET['id'];
		$ketnoi= mysqli_query($conn, $sql);
		header("location:shop2.php?per_page=9&page=1");
?>