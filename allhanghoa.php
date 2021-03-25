<?php 
	$con= mysqli_connect("localhost","root","","myshop");
	$sqll="SELECT * FROM hanghoa LIMIT 6";
	$query=mysqli_query($con,$sqll);
?>
<?php
	while( $row1 = mysqli_fetch_assoc($query)) { 
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
<?php  
}

?>

