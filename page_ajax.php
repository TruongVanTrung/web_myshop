<?php
$page='';
if (isset($_POST['first_page'] || $_POST['prev_page'] || $_POST['num_page'] || $_POST['next_page'] || $_POST['end_page'])) {
 	$page=$_POST['first_page'];
 	$page=$_POST['prev_page'];
 	$page=$_POST['num_page'];
 	$page=$_POST['next_page'];
 	$page=$_POST['end_page'];
 } 
 echo $page;
	$item_per_page= 2;
	$current_page= !empty($page)?$page:1; 
	$offset= ($current_page-1)*$item_per_page;
	$con= mysqli_connect("localhost","root","","myshop");
	$sqll="SELECT * FROM hanghoa WHERE idloaihang=$ten LIMIT $item_per_page OFFSET $offset";
	$query=mysqli_query($con,$sqll);
	$sql="SELECT COUNT(*) AS num_rows FROM hanghoa WHERE idloaihang=$ten ";
	$totalproduct = mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($totalproduct);
	$total=$data['num_rows'];
	$totalpage = ceil($total/$item_per_page);
?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<?php while($row1 = mysqli_fetch_assoc($query)) 
{
?>
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
			<ul class="pagination">
		<?php 
			if($current_page>3){
				$first_page = 1;
		?>
		<li id="page"><a href="" id="<?php echo $first_page; ?>">Đầu</a></li>
		<?php } 
		if($current_page>1){
			$prev_page = $current_page-1;
		?>
		<li  id="page"><a href="" id="<?php echo $prev_page; ?>">PREV</a></li>
		<?php } ?>
		<?php for($num=1;$num<=$totalpage;$num++){ 
		?>
			<?php if($num!=$current_page){ ?>
				<?php if($num > $current_page-3 && $num < $current_page+3){ ?>
					<li id="page"><a href="" id="<?php echo $num; ?>"><?php echo $num; ?></a></li>
				<?php } ?>
			<?php }else{ ?>
				<li id="page"><a  style="background-color: #FE980F"><strong ><?php echo $num; ?></strong></a></li>
			<?php } ?>
		<?php  
		}
		if($current_page<$totalpage-1){
			$next_page = $current_page+1;
		?>
		<li id="page"><a href="" id="<?php echo $next_page; ?>">NEXT</a></li>
		<?php } ?>
		<?php 
			if($current_page>$totalpage-3){
				$end_page = $totalpage;
			?>
			<li id="page"><a href="" id="<?php echo $end_page; ?>">Cuối</a></li>
		<?php } ?>
	</ul>
<?php  
}
?><!--features_items-->

</body>
</html>
<script>//AJax
	$(document).ready(function(){
		$("#page").click(function(){
			var fpage = $("#<?php echo $first_page; ?>").attr("id");
			var ppage = $("#<?php echo $prev_page; ?>").attr("id");
			var page = $("#<?php echo $num; ?>").attr("id");
			var npage = $("#<?php echo $next_page; ?>").attr("id");
			var epage = $("#<?php echo $end_page; ?>").attr("id");
			$.post("page_ajax.php", { first_page: fpage, prev_page: ppage, num_page: page, next_page: npage, end_page: epage}, function(result){
				$("#dssanpham").html(result);
			});
		});
	});
</script>
	<ul class="pagination">
		<?php 
			if($current_page>3){
				$first_page = 1;
		?>
		<li id="page"><a href="" id="<?php echo $first_page; ?>">Đầu</a></li>
		<?php } 
		if($current_page>1){
			$prev_page = $current_page-1;
		?>
		<li  id="page"><a href="" id="<?php echo $prev_page; ?>">PREV</a></li>
		<?php } ?>
		<?php for($num=1;$num<=$totalpage;$num++){ 
		?>
			<?php if($num!=$current_page){ ?>
				<?php if($num > $current_page-3 && $num < $current_page+3){ ?>
					<li id="page"><a href="" id="<?php echo $num; ?>"><?php echo $num; ?></a></li>
				<?php } ?>
			<?php }else{ ?>
				<li id="page"><a  style="background-color: #FE980F"><strong ><?php echo $num; ?></strong></a></li>
			<?php } ?>
		<?php  
		}
		if($current_page<$totalpage-1){
			$next_page = $current_page+1;
		?>
		<li id="page"><a href="" id="<?php echo $next_page; ?>">NEXT</a></li>
		<?php } ?>
		<?php 
			if($current_page>$totalpage-3){
				$end_page = $totalpage;
			?>
			<li id="page"><a href="" id="<?php echo $end_page; ?>">Cuối</a></li>
		<?php } ?>
	</ul><!--features_items-->

