<?php  
  if(isset($_POST['submitt'])){
      $tendanhmuc = $_POST['tendanhmuc'];
      $idd= $_POST['id'];
      $conn = mysqli_connect("localhost","root","","myshop");
      $sql = "UPDATE loaihang SET tenloaihang = '$tendanhmuc' WHERE id='$idd'";
      $query= mysqli_query($conn, $sql);
	}
	header("location: danhmuc.php");
?>