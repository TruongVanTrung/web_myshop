<?php  
	$tenmathang = $_POST['tenmathang'];
	$soluong = $_POST['soluong'];
	$dongia = $_POST['dongia'];
	$iddanhmuc = $_POST['danhmuc'];
	$idloaihang = $_POST['loaihang'];
	$image = $_POST['file'];
	$id = $_POST['id'];
	if(isset($_POST['submit'])){
		$pname= $_FILES["file"]["name"];
		$tname= $_FILES["file"]["tmp_name"];
		$uploads_dir='/admin';
		move_uploaded_file($tname, $uploads_dir.'/'.$pname);
		$conn= mysqli_connect("localhost","root","","myshop");
		$sql = "UPDATE hanghoa SET tenmathang ='$tenmathang', iddanhmuc='$iddanhmuc',idloaihang='$idloaihang', soluong = '$soluong', gia = '$dongia',linkimage='$pname' WHERE id='$id'";
		$query= mysqli_query($conn, $sql);
	}
	header("location:hanghoa_admin.php");
?>