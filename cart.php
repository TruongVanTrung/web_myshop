<?php
session_start();
	if (isset($_POST["submitt"])) {
			$date =date("Y/m/d");
			$idd=$_SESSION['id'];
			$diachi=$_POST["diachi"];
			$totall=$_POST["total"];
			$str=$_POST['str'];
			$connect=mysqli_connect("localhost","root","","myshop") or die("Can not connect database");	
			$sql1="INSERT INTO donhang(iduser,thoigian,diachi,tongtien,idtrangthai) VALUES('$idd','$date','$diachi','$totall','1')";
			$queryy=mysqli_query($connect,$sql1);
			$id= mysqli_insert_id($connect);
			header("location:thanhtoan.php?iddonhang=$id&id=$str&tongtien=$totall");
		}
	if(isset($_POST['submit']))
	{
		foreach($_POST['quantity'] as $key=>$value)
		{
			if( ($value == 0) and (is_numeric($value)))
			{
				unset ($_SESSION['cart'][$key]);
			}
			else if(($value > 0) and (is_numeric($value)))
			{
				$_SESSION['cart'][$key]=$value;
			}
		}
		header("location:cart.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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

<body>
	<?php include('header.php') ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="" >Ảnh</td>
							<td class="description">Tên mặt hàng</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng cộng</td>
							<td class="total"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
				<?php
					$ok=1;
					$total=0;
					if(isset($_SESSION['cart']))
					{
						foreach($_SESSION['cart'] as $k => $v)
						{
							if(isset($k))
							{
								$ok=2;echo $k;
							}
						}
					}
					if($ok == 2)
					{
						echo "<form action='cart.php' method='POST'>";
						foreach($_SESSION['cart'] as $key=>$value)
						{
							$item[]=$key;
						}
						$str=implode(",",$item);
						$connect=mysqli_connect("localhost","root","","myshop") or die("Can not connect
						database");
						
						$sql="SELECT * from hanghoa where id in ($str)";
						$query=mysqli_query($connect, $sql);
						while($row=mysqli_fetch_array($query))
						{
							$tongsoluong=$row['soluong'];
							$soluongmua= $_SESSION['cart'][$row['id']];
							$sub = $tongsoluong - $soluongmua;
					?>
						<?php  
						if($sub>=0){
						?>
							<tr>
								<td style="height: 100px;width: 100px" class="">
									<img style="height: 100%;width: 100%;object-fit: contain;" src="admin/img/<?php echo $row['linkimage'];?>" alt="">
								</td>
								<td class="cart_price">
									<p><?php echo $row['tenmathang']; ?></p>
								</td>
								<td class="cart_price">
									<p><?php echo number_format($row['gia']); ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<?php echo" <input class='cart_quantity_input' type='number' name='quantity[".$row['id']."]' value='{$_SESSION['cart'][$row['id']]}' autocomplete='off' size='2'>"; ?>
										<button class="btn-warning" style="margin-left: 5px;" type="submit" name="submit">Cập nhật</button>
									</div>
								</td>
								
								<td class="cart_total">
									<p class="cart_total_price"><?php echo number_format($_SESSION['cart'][$row['id']]*$row['gia']); ?></p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="<?php echo 'delcart.php?productid='.$row['id'];?>">Xóa <i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php  
						}else{
							echo "<p>Số lượng".$row['tenmathang']."còn lại là:".$tongsoluong."</p>";
							echo "<h6> Vui lòng đặt lại</h6>";
						?>
							<tr>
								<td class="" style="height: 100px;width: 100px">
									<img style="height: 100%;width: 100%;object-fit: contain;" src="admin/img/<?php echo $row['linkimage'];?>" alt="">
								</td>
								<td class="cart_price">
									<p><?php echo $row['tenmathang']; ?></p>
								</td>
								<td class="cart_price">
									<p><?php echo number_format($row['gia']); ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<?php echo" <input class='cart_quantity_input' type='number' name='quantity[".$row['id']."]' value='{$_SESSION['cart'][$row['id']]}' autocomplete='off' size='2'>"; ?>
										<button class="btn-warning" style="margin-left: 5px;" type="submit" name="submit">Cập nhật</button>
									</div>
								</td>
								
								<td class="cart_total">
									<p class="cart_total_price"><?php echo number_format($_SESSION['cart'][$row['id']]*$row['gia']); ?></p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="<?php echo 'delcart.php?productid='.$row['id'];?>">Xóa <i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php 
						}
						?>

						<?php $total+=$_SESSION['cart'][$row['id']]*$row['gia']; ?>
						
					<?php 
						}
						
					}

					?>

						<tr>
							<td class="cart_product">
							</td>
							<td class="cart_description">
							</td>
							<td class="cart_price">
							</td>
							<td class="cart_quantity">
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Tổng: <?php echo number_format($total); ?></p>
							</td>
							
						</tr>
					</tbody>
				</table>
					<?php
							echo "<div class='pro' align='center'>";
							echo "<b><u><a href='index.php'>Mua hàng tiếp</a></u> - <u><a
							href='delcart.php?productid=0'>Xóa giỏ hàng</a></u></b>";
							echo "</div>";  
					?>
			</div>
			<div class="row justify-content-center">
		        <div class="col-lg-12">
		            <div class="card">
		                <div class="row">
		                    <div class="col-lg-3 radio-group">
		                        <div class="row d-flex px-3 radio"> <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
		                        </div>
		                        <div class="row d-flex px-3 radio gray"> <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
		                        </div>
		                        <div class="row d-flex px-3 radio gray mb-3"> <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
		                        </div>
		                    </div>
		                    <form action="cart.php" method="POST">
		                    <div class="col-lg-5">
		                    	
		                        <div class="row px-2">
		                            <div class="form-group col-md-6"> 
		                            <label class="form-control-label">
		                            Tên đặt hàng	
		                            </label> 
		                            <input type="text" id="cname" name="cname" placeholder="<?php  
		                            if (isset($_SESSION['usernamee'])) {
		                            	echo $_SESSION['usernamee'];
		                            }else{
		                            	echo ' Đăng nhập';
		                            }
		                            ?>
		                            "> 
		                        	</div>
		                        	
			                            <div class="form-group col-md-6"> 
			                            	<label class="form-control-label">Địa chỉ</label> 
			                            	<input type="text" id="cnum" name="diachi" placeholder="Tổ/số nhà,Quận,Thành phố"> 
			                            	<input type="hidden" name="total" value="<?php echo $total; ?>">
			                            	<input type="hidden" name="str" value="<?php echo $str; ?>">
			                            </div>
			                            
			                        
		                        </div>
		                        <div class="row px-2">
		                            <div class="form-group col-md-6"> <label class="form-control-label">Expiration Date</label> <input type="text" id="exp" name="exp" placeholder="MM/YYYY"> </div>
		                            <div class="form-group col-md-6"> <label class="form-control-label">CVV</label> <input type="text" id="cvv" name="cvv" placeholder="***"> </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-4 mt-2">
		                        <div class="row d-flex justify-content-between px-4">
		                            <p class="mb-1 text-left">Tổng tiền hàng</p>
		                            <h6 class="mb-1 text-right"><?php echo number_format($total); ?>đ</h6>
		                        </div>
		                        <div class="row d-flex justify-content-between px-4">
		                            <p class="mb-1 text-left">Tổng tiền ship</p>
		                            <h6 class="mb-1 text-right">10.000đ</h6>
		                        </div>
		                        <div class="row d-flex justify-content-between px-4" id="tax">
		                            <p class="mb-1 text-left">Tổng cộng</p>
		                            <h6 class="mb-1 text-right"><?php echo number_format($total); ?></h6>
		                        </div><a href="<?php echo 'xl_thanhtoan.php?id='.$id.'&soluong='.$soluong.'&dongia='.$gia.'&tongtien'.$tongtien; ?>"> <button class="btn-block btn-blue" type="submit" name="submitt"> <span> <span id="checkout">Thanh toán</span> <span id="check-amt"><?php echo number_format($total); ?></span> </span> </button></a>
		                    </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>