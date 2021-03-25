<?php session_start(); ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include'leftslide.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Thông báo
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">Trương Văn Trung đã đăng kí 1 dịch vụ</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    Trương Văn Trung đã thanh toán 500$.
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Trương Văn Trung không thanh toán.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Tin Nhắn
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Chào bạn!! Tui đang cần đặt phòng.</div>
                    <div class="small text-gray-500">Trương Văn Trung · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Tôi muốn hủy phòng</div>
                    <div class="small text-gray-500">Lê Đăng Khoa · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Tôi rất thích dịch vụ bên các bạn</div>
                    <div class="small text-gray-500">Trần Dần · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Dịch vụ verry good</div>
                    <div class="small text-gray-500">Nguyễn Văn Cừ · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Trương Văn Trung</span>
                <img class="img-profile rounded-circle" src="https://scontent.fsgn2-1.fna.fbcdn.net/v/t1.0-9/53656006_2254397618134913_6188114766121140224_o.jpg?_nc_cat=107&_nc_sid=09cbfe&_nc_ohc=ZA1qcDMvRWcAX8iQPaQ&_nc_ht=scontent.fsgn2-1.fna&oh=497b26266f3d8736fea1b90649cd69a4&oe=5F505717">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Doanh số</h1>
          <div class="container">
            <div class="row">
              <div class="card-deck">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                  <?php  
                  $date=date("Y-m-d");
                  $dateee="2020-12-13";
                  $datee=explode("-", $date);
                  $thang=$datee[1];
                  $ngay = $datee[2];
                  $con=mysqli_connect("localhost","root","","myshop");
                  $sql="SELECT * FROM donhang WHERE thoigian = CURRENT_DATE()";
                  $sql1="SELECT COUNT(*) AS 'sodonhang' FROM donhang WHERE thoigian=CURRENT_DATE()";
                  $query=mysqli_query($con,$sql);
                  $query2=mysqli_query($con,$sql1);
                  $row1=mysqli_fetch_assoc($query2);

                  $totall=0;
                  while($row=mysqli_fetch_assoc($query)){
                    $total=$row['tongtien'];
                    $totall+=$total;
                  }
                  ?>
                  <div class="card-header"><h5 style="color: #000;">Doanh thu hôm nay</h5></div>
                  <div class="card-body">
                    <h5 class="card-title">Tổng tiền:<?php echo number_format($totall) ;?> VND </h5>
                    <p class="card-text">Số đơn hàng:<?php echo $row1['sodonhang']; ?></p>
                  </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header"><h5 style="color: #000;">Doanh thu tháng này</h5></div>
                  <?php 
                  $date=date("Y-m-d");
                  $datee=explode("-", $date);
                  $thang=$datee[1];
                  $conn=mysqli_connect("localhost","root","","myshop");
                  $sqll="SELECT  * FROM donhang WHERE MONTH(thoigian)=$thang";
                  $sqll1="SELECT  COUNT(*) AS 'sodonhang' FROM donhang WHERE MONTH(thoigian)=$thang";
                  $queryy=mysqli_query($conn,$sqll);
                  $queryy1=mysqli_query($conn,$sqll1);
                  $row2=mysqli_fetch_assoc($queryy1);
                  $tongg=0;
                  while($row3=mysqli_fetch_assoc($queryy)){
                    $tong=$row3['tongtien'];
                    $tongg+=$tong;
                  }
                  ?>
                  <div class="card-body">
                    <h5 class="card-title">Tổng tiền: <?php echo number_format($tongg); ?> VND</h5>
                    <p class="card-text">Số đơn hàng: <?php echo $row2['sodonhang'] ?></p>
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header"><h5 style="color: #000;">Doanh thu năm nay</h5></div>
                  <?php 
                  $date=date("Y-m-d");
                  $datee=explode("-", $date);
                  $nam=$datee[0];
                  $conn=mysqli_connect("localhost","root","","myshop");
                  $sql3="SELECT  * FROM donhang WHERE YEAR(thoigian)=$nam";
                  $sql4="SELECT  COUNT(*) AS 'sodonhang' FROM donhang WHERE YEAR(thoigian)=$nam";
                  $query3=mysqli_query($conn,$sql3);
                  $query4=mysqli_query($conn,$sql4);
                  $row5=mysqli_fetch_assoc($query4);
                  $tonggg=0;
                  while($row4=mysqli_fetch_assoc($query3)){
                    $tong=$row4['tongtien'];
                    $tonggg+=$tong;
                  }
                  ?>
                  <div class="card-body">
                    <h5 class="card-title">Tổng tiền:<?php echo number_format($tonggg); ?> VND</h5>
                    <p class="card-text">Số đơn hàng: <?php echo $row5['sodonhang']; ?></p>
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <script>//AJax
                $(document).ready(function(){
                  $("#submit").click(function(){
                    var date= $("#date").val();
                    $.post("xl_timdoanhso.php", { datee: date }, function(result){
                      $("#thongkedonhang").html(result);
                    });
                  });
                });
              </script>
              <p class="mb-4">Thống kê thu nhập của trang website trong thời gian: 
              <input class="border-primary bg-white" type="date" id="date">
              <button class="btn btn-outline-primary" type="submit" id="submit">Tìm kiếm</button>
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
                      $sql0="SELECT * FROM donhang WHERE thoigian = CURRENT_DATE()";
                      $query0=mysqli_query($conn,$sql0);
                      $tongtienn=0;
                      while ($row0=mysqli_fetch_assoc($query0)) {
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
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ngày gần đây</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>
                 
                </div>
              </div>

              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Năm vừa rồi</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myBarChart">trung</canvas>

                  </div>
                  <hr>
                  
                </div>
              </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Hiệu suất hoạt động</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../BaiTapHTML/dangnhap.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>


</body>

</html>
