<?php
	$tenmathang = $_POST['tenmathang'];
	$soluong = $_POST['soluong'];
	$dongia = $_POST['gia'];
	$iddanhmuc = $_POST['danhmuc'];
	$idloaihang = $_POST['loaihang'];
	$image = $_POST['image'];
	$id = $_POST['idd'];
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$conn= mysqli_connect("localhost","root","","myshop");
			$sql = "UPDATE hanghoa SET tenmathang ='$tenmathang', iddanhmuc='$idloaihang',idloaihang='$iddanhmuc', soluong = '$soluong', gia = '$dongia',linkimage='$image' WHERE id='$id'";
			$query= mysqli_query($conn, $sql);
				header("location:shop2.php");
		}
?>