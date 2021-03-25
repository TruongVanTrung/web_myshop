<?php session_start(); 
  $date=$_POST['datee'];
  $date2=explode("-", $date);
  $nam=$date2[0];
  $thang=$date2[1];
  $ngay = $date2[2];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Thống kê doanh số</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
        <div id="thongkedonhang">
            <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <p>Thu nhập hôm nay</p>
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>ID USER</th>
                        <th>Date</th>
                        <th>Địa chỉ</th>
                        <th>tổng tiền</th>
                        <th>Trạng thái</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <?php  
                      $conn=mysqli_connect("localhost","root","","myshop");
                      $sql="SELECT  * FROM donhang WHERE YEAR(thoigian)=$nam AND MONTH(thoigian)=$thang AND DAY(thoigian)=$ngay";
                      $queryy=mysqli_query($conn,$sql);
                      $tongtienn=0;
                      while ($row0=mysqli_fetch_assoc($queryy)) {
                        $id=$row0['id'];
                        $iduser=$row0['iduser'];
                        $idrole=$row0['idtrangthai'];
                        $sql_user="SELECT * FROM user WHERE id=$iduser";
                        $query_user=mysqli_query($conn,$sql_user);
                        $row_user=mysqli_fetch_assoc($query_user);
                        $username= $row_user['username'];
                        $sql_role="SELECT * FROM trangthai WHERE id=$idrole";
                        $query_role=mysqli_query($conn,$sql_role);
                        $row_role=mysqli_fetch_assoc($query_role);
                        $role= $row_role['trangthai'];
                        $tongtienn+=$row0['tongtien'];
                      ?>
                      <tr>
                        <td><?php echo $row0['id']; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $row0['thoigian']; ?></td>
                        <td><?php echo $row0['diachi']; ?></td>
                        <td><?php echo $row0['tongtien']; ?></td>
                        <td><?php echo $role; ?><br>
                          <a href="sua_donhang.php?id=<?php echo $id;?>"><button class="btn btn-outline-primary"> Sửa trạng thái</button></a><br>
                          <a href="chitietdonhang.php?iddonhang=<?php echo $row0['id']; ?>">Xem chi tiết đơn hàng</a>
                        </td>
                      </tr>
                    <?php } ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Tổng: <?php echo $tongtienn; ?></td>
                        <td></td>
                      </tr>
                    </tfoot>
                  </table>
              
                
              </div>
          </div>
</body>
</html>
          