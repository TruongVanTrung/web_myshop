<?php
  session_start();
  $messs='';
  if(isset($_POST['submit']))
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $tenmathang = $_POST['tenmathang'];
      $soluong = $_POST['soluong'];
      $dongia = $_POST['dongia'];
      $iddanhmuc = $_POST['danhmuc'];
      $idloaihang = $_POST['loaihang'];
      $image = $_POST['file'];
      $conn = mysqli_connect("localhost","root","","myshop");
      $sqll = "SELECT hanghoa FROM loaihang WHERE tenmathang=$tenmathang";
      $query = mysqli_query($conn, $sqll);
      if (mysqli_num_rows($query)>0) {
        $messs="Tên danh mục này đã tồn tại";
        echo ' <script type="text/javascript"> alert("'.$messs.'")</script>';
        header("location:hanghoa_admin.php");
      }else{
      $pname= $_FILES["file"]["name"];
      $tname= $_FILES["file"]["tmp_name"];
      $uploads_dir='/admin';
      move_uploaded_file($tname, $uploads_dir.'/'.$pname);
      $sql = "INSERT INTO hanghoa(tenmathang,iddanhmuc,idloaihang,soluong,gia,linkimage) VALUES('$tendanhmuc','$iddanhmuc','$idloaihang','$soluong','$dongia','$pname')";
      $query1 = mysqli_query($conn, $sql);
      $messs ="Bạn đã thêm thành công";
      echo '<script type="text/javascript"> alert("'.$messs.'")</script>';
      header("location:hanghoa_admin.php");
      }
    }
?>