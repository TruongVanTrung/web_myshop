<?php  
	session_start();
		if (isset($_GET["iddonhang"])) {
			$iddonhang=$_GET["iddonhang"];
		}
		$idsanpham= $_GET["id"];
		$tongtien=$_GET['tongtien'];		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payments | E-Shopper</title>
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
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
	<div class="container px-4 py-5 mx-auto payment">
		<h1 class="text-center">Bạn đã thanh toán thành công.</h1>
		<h3 class="text-center">HÓA ĐƠN</h3>
		<a href="cart.php"><h3>Quay lại</h3></a>
	    <div class="row d-flex justify-content-center">
	        <div class="col-3">
	            <h4 class="heading">Tên mặt hàng</h4>
	        </div>
	        <div class="col-6">
	            <div class="row text-right">
	                <div class="col-2">
	                    <h6 class="mt-2">Số lượng</h6>
	                </div>
	                <div class="col-5">
	                    <h6 class="mt-2">Giá</h6>
	                </div>
	                <div class="col-5">
	                    <h6 class="mt-2">Tổng tiền</h6>
	                </div>
	            </div>
	        </div>
	        <div class="col-2">
	        	
	        </div>
	    </div>
	    <div class="row d-flex justify-content-center border-top">
	    	<?php  
	    	$connect=mysqli_connect("localhost","root","","myshop") or die("Can not connect
						database");					
			$sql="SELECT * from hanghoa where id in ($idsanpham)";
			$query=mysqli_query($connect, $sql);
			while($row=mysqli_fetch_array($query))
			{
				$id=$row['id'];
				$gia = $row['gia'];
				$tongsoluong=$row['soluong'];
				$soluong= $_SESSION['cart'][$row['id']];
				$soluong_now=$tongsoluong - $soluong;
				$sql10="UPDATE hanghoa SET soluong = '$soluong_now' WHERE id='$id'";
				$sqll="INSERT INTO detail_donhang(iddonhang,idsanpham,soluong,dongia) VALUES('$iddonhang','$id','$soluong','$gia')";
				$query10=mysqli_query($connect,$sql10);
				$queryy=mysqli_query($connect,$sqll);
	    	?>
	    	
		        <div class="col-3">
		            <div class="row d-flex">
		                <div class="book"> <img src="https://i.imgur.com/2DsA49b.jpg" class="book-img"> </div>
		                <div class="my-auto flex-column d-flex pad-left">
		                    <h6 class="mob-text"><?php echo $row['tenmathang']; ?></h6>
		                </div>
		            </div>
		        </div>
		        <div class="my-auto col-6">
		            <div class="row text-right">
		                <div class="col-2">
		                    <input type="number" name="number" value="<?php echo $_SESSION['cart'][$row['id']]; ?>">
		                </div>
		                <div class="col-5">
		                    <div class="row d-flex justify-content-end px-3">
		                        <p class="mb-0" id="cnt1"><?php echo $row['gia']; ?></p>
		                    </div>
		                </div>
		                <div class="col-5">
		                    <h6 class="mob-text"><?php echo $_SESSION['cart'][$row['id']]*$row['gia']; ?></h6>
		                </div>
		            </div>
		        </div>
		        
		        <div class="col-2">
		        	
		        </div>
		    </form>
	        <?php    
	   	 	}
	   	 	
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
	                            	<input type="text" id="cnum" name="cnum" placeholder="Tổ/số nhà,Quận,Thành phố"> 
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
	                            <h6 class="mb-1 text-right"><?php echo number_format($tongtien); ?>đ</h6>
	                        </div>
	                        <div class="row d-flex justify-content-between px-4">
	                            <p class="mb-1 text-left">Tổng tiền ship</p>
	                            <h6 class="mb-1 text-right">10.000đ</h6>
	                        </div>
	                        <div class="row d-flex justify-content-between px-4" id="tax">
	                            <p class="mb-1 text-left">Tổng cộng</p>
	                            <h6 class="mb-1 text-right"><?php echo number_format($tongtien); ?></h6>
	                        </div><a href="<?php echo 'xl_thanhtoan.php?id='.$id.'&soluong='.$soluong.'&dongia='.$gia.'&tongtien'.$tongtien; ?>"> <button class="btn-block btn-blue"> <span> <span id="checkout">Checkout</span> <span id="check-amt"><?php echo number_format($tongtien); ?></span> </span> </button></a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<footer id="footer">
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/price-range.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<?php  
	  include('PHPMailer/PHPMailerAutoload.php');
      $mail = new PHPMailer;

      //$mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'tienssss4@gmail.com';                 // SMTP username
      $mail->Password = 'qnfqrwbhywrqxhdw
';                           // SMTP password
      $mail->SMTPSecure = 'tls';
      $mail->setFrom('E-SHOPPER@gmail.com', 'Thông Báo');
      $mail->addAddress($_SESSION['usernamee'], 'Hóa đơn');     // Add a recipient
      $mail->addAddress('vantrung8082k1@gmail.com','admin');               // Name is optional
      
      $mail->Port = 587; 
      $mail->isHTML(true);
      $content='<h3>Hoá đơn thanh toán </h3><p>Đơn hàng của bạn có ID:'.$iddonhang.'.</p><p> VUI LÒNG THEO DÕI TRẠNG THÁI ĐƠN HÀNG ĐỂ NHẬN HÀNG.</p>';                                 // Set email format to HTML
      $content.=' <table  border="1">';
      $content.= '<tr><th>Stt</th><th>Tên sản phẩm</th><th>Số lượng</th><th>Đơn giá</th><th>Tổng tiền</th></tr>';
      $conn=mysqli_connect("localhost","root","","myshop");
	  $sql11="SELECT * FROM detail_donhang WHERE iddonhang= $iddonhang";
	  $query11=mysqli_query($conn,$sql11);
	  $stt=1;  
	  while($row11=mysqli_fetch_assoc($query11)){
		   $idsanpham=$row11['idsanpham'];
		   $soluong=$row11['soluong'];
		   $dongia=$row11['dongia'];
		   $tongtien=$soluong*$dongia;
           $sql12="SELECT * FROM hanghoa WHERE id=$idsanpham";
           $query12=mysqli_query($conn,$sql12);
           $row12= mysqli_fetch_assoc($query12);
           $content.='<tr><td>'.$stt.'</td><td>'.$row12['tenmathang'].'</td><td>'.$row11['soluong'].'</td><td>'.$row11['dongia'].'</td><td>'.$tongtien.'</td></tr>';
           $total+=$tongtien;
           $stt++;
	  }
	  $content.='<tr><td></td><td></td><td></td><td></td><td>'.$total.'</td></tr>';
	  $content.='</table>';
	  $content.='<p><b>CẢM ƠN QUÝ KHÁCH</b></p>';
      $mail->Subject = 'E-SHOPPER.com';
      $mail->Body    = $content	
    ;
      $mail->CharSet = "utf-8";
      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' .$mail->ErrorInfo;
      } else {
        header("location:cart.php");
      }
	?>
</body>
</html>