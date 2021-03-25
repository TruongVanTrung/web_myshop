<?php  
	if(isset($_POST['submit'])){
      $id= $_POST['idd'];
      $traloi = $_POST['traloi'];
      $idu = $_SESSION['id'];
      $date=date("Y-m-d");
      $time =date("H:i");
      $conn = mysqli_connect("localhost","root","","myshop");
      $sql = "INSERT INTO replycomment(idbinhluan,iduserr,traloi,ngayy,gioo) VALUES('$id','$idu','$traloi','$date','$time')";
      $query= mysqli_query($conn, $sql);
    }
    header("location:xembinhluan.php");
?>