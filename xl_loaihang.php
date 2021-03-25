<?php  
$ten='';
if(isset($_POST['tenlh'])){
	$ten=$_POST['tenlh'];
}
	$con= mysqli_connect("localhost","root","","myshop");
	$sqll="SELECT * FROM hanghoa WHERE idloaihang=$ten LIMIT 6";
	$query=mysqli_query($con,$sqll);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<?php
	
while($row1 = mysqli_fetch_assoc($query)) 
{ 
?>
	<div id="dssanpham">
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="admin/img/<?php echo $row1['linkimage']; ?>" alt="" />
						<h2>Giá: <?php echo number_format($row1['gia']); ?></h2>
						<p><?php echo $row1['tenmathang']; ?></p>
						<?php echo'<a href="addcart.php?item='.$row1['id'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'?>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>Giá: <?php echo number_format($row1['gia']); ?></h2>
							<p><?php echo $row1['tenmathang']; ?></p>
												<?php echo'<a href="addcart.php?item='.$row1['id'].'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'?>
						</div>
					</div>
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
						<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php
}
?>


</body>
</html>
