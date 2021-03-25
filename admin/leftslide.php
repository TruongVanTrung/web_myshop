<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../BaiTapHTML/menu.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EShopping</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trang chủ</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
      $rolee=$_SESSION['role'];
       if($rolee=='3'){ ?>
        <li class="nav-item">
          <a class="nav-link " href="useradmin.php" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Users Admin</span>
          </a>
        </li>
      <?php }else{
        echo '';
      } ?>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="thongke.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Thống kê doanh số</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Danh sách khách hàng</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="danhmuc.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Danh mục</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="hanghoa_admin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Hàng hóa</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="donhang.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Danh sách đơn hàng</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="xembinhluan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Danh sách bình luận</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>