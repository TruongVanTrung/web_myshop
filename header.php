	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 914 243 600</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> tvtrung.19it2@vku.udn.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Việt Nam
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USA</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Đồng</a></li>
									<li><a href="#">$</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-star"></i> Danh sách yêu thích</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Đăng nhập</a></li>
								<li><a href="#"><i class="fa fa-user"></i> 
									<?php  
									if (isset($_SESSION['usernamee'])) {
										echo $_SESSION['usernamee'];
									}else{
										echo "Tài khoản trống";
									}
									?>
								</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Thoát</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Sản phẩm</a></li>
										<li><a href="product-details.php">Thông tin sản phẩm</a></li>
										<li><a href="cart.php">Giỏ hàng</a></li>
										<li><a href="login.php">Đăng nhập</a></li>  
										<li><a href="checkout.php">Thoát</a></li>			 
                                    </ul>
                                </li>
                                <?php  
                                if(isset($_SESSION['role'])){
                                 
									echo' <li class="dropdown"><a href="#">Admin<i class="fa fa-angle-down"></i></a>
	                                    <ul role="menu" class="sub-menu">
	                                        <li><a href="themdanhmuc.php">Thêm danh mục</a></li>
	                                        <li><a href="danhmuc1.php">Sửa, Xóa danh mục</a></li>
	                                        <li><a href="shop2.phpl">Sửa, Xóa sản phẩm</a></li>
											<li><a href="themsanpham.php">Thêm sản phẩm</a></li>
	                                    </ul>
	                                </li>';
	                            }else{
	                            	echo '';
	                            }
	                            ?> 
								<li><a href="contact-us.html">Liên hệ/Hỗ trợ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm" id="timkiem">
							<button class="btn-outline-warning" id="submit1" type="submit">Tìm</button>
						
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li class="dropdown"><a href="#">Tìm theo giá<i class="fa fa-angle-down"></i></a>
	                                    <ul role="menu" class="sub-menu">
	                                        <li><a href="timtheogia.php?gia=1">Dưới 7tr</a></li>
											<li><a href="timtheogia.php?gia=2">Từ 7Tr đến 19Tr</a></li>
											<li><a href="timtheogia.php?gia=3">Lớn hơn 19Tr</a></li>  		 
	                                    </ul>
	                                </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->