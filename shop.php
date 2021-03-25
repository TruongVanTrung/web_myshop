<?php  
session_start();
?>
<?php  
if (isset($_GET['submit'])) {
	$sosanpham=$_GET['number'];
	$_SESSION['product']=$sosanpham;
	header("location:shop.php?per_page=$sosanpham&page=1");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>//AJax
	$(document).ready(function(){
		$("#all").click(function(){
			$.post("allhanghoa.php",  function(result){
				$("#dssanpham").html(result);
			});
		});
		$("#submit1").click(function(){
			var txt = $("#timkiem").val();
			$.post("timkiem.php",{noidung: txt },function(result){
				$("#dssanpham").html(result);
			});
		});
	});
</script>
<body>

	<?php  include('header.php'); ?>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('left_slidebar.php'); ?>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">HÀNG HÓA</h2>
						<div id="dssanpham">
						<?php
						if (isset($_SESSION['product'])) {
							$per=$_SESSION['product'];
						}else{
							$per=3;
						}
						$item_per_page= !empty($_GET['per_page'])?$_GET['per_page']:$per;
						$current_page= !empty($_GET['page'])?$_GET['page']:1; 
						$offset= ($current_page-1)*$item_per_page;
						$con= mysqli_connect("localhost","root","","myshop");
						$sqll="SELECT * FROM hanghoa ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
						$query=mysqli_query($con,$sqll);
						$totalproduct = mysqli_query($con,"SELECT * FROM hanghoa");
						$totalproduct = $totalproduct->num_rows;
						$totalpage = ceil($totalproduct/$item_per_page);
						?>
						<?php  
							while( $row2 = mysqli_fetch_assoc($query)) {
						?>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="admin/img/<?php echo $row2['linkimage']; ?>" alt="" />
											<h2>Giá: <?php echo number_format($row2['gia']); ?></h2>
											<p><?php echo $row2['tenmathang']; ?></p>
											<?php echo'<a href="addcart.php?item='.$row2['id'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'?>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Giá: <?php echo number_format($row2['gia']); ?></h2>
												<p><?php echo $row2['tenmathang']; ?></p>
												<?php echo'<a href="addcart.php?item='.$row2['id'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'?>
											</div>
										</div>
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="thongtinsp.php?id=<?php echo $row2['id']; ?>"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
										</ul>
									</div>
								</div>
							</div>
						<?php  
						}
						?>


						</div>						
							
					</div>
					<form action="shop.php" method="GET">
						<label>Chọn số sản phẩm mỗi trang</label><br>
						<input style="width: 10%" type="number" name="number">
						
						<input width="1" type="submit" name="submit" value="Thay đổi">
					</form>
					<br>
					<?php 

					?>
					<ul class="pagination">
						<?php 
							if($current_page>3){
								$first_page = 1;
						?>
						<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $first_page ; ?>">Đầu</a></li>
						<?php } 
						if($current_page>1){
								$prev_page = $current_page-1;
						?>
						<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $prev_page ; ?>">PREV</a></li>
						<?php } ?>
						<?php for($num=1;$num<=$totalpage;$num++){ 
						?>
							<?php if($num!=$current_page){ ?>
								<?php if($num > $current_page-3 && $num < $current_page+3){ ?>
									<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $num; ?>"><?php echo $num; ?></a></li>
								<?php } ?>
							<?php }else{ ?>
								<li><a  style="background-color: #FE980F"><strong ><?php echo $num; ?></strong></a></li>
							<?php } ?>
						<?php  
						}
						if($current_page<$totalpage-1){
								$next_page = $current_page+1;
						?>
						<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $next_page; ?>">NEXT</a></li>
						<?php } ?>
						<?php 
							if($current_page>$totalpage-3){
								$end_page = $totalpage;
						?>
						<li><a href="?per_page=<?php echo $item_per_page; ?>&page=<?php echo $end_page ; ?>">Cuối</a></li>
						<?php } ?>
					</ul><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>