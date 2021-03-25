<?php  
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type="text/javascript" src="Eshopper/ckeditor/ckeditor.js"></script>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

    </style>
</head><!--/head-->
		<script type="text/javascript">
			
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>//AJax
			$(document).ready(function(){
				$("#guibinhluan").click(function(){
					var sim = $("input[type='radio']:checked").val();
				  	var idsp = <?php echo ($_GET['id']); ?>;
				    var txt = $("#noidungbinhluan").val();
				    $.post("xlbinhluan.php", {noidung: txt, idsanpham: idsp, rate: sim }, function(result){
				      $("#dsbinhluan").html(result);
					});
				});

			});

		</script>

										
<body>
	<?php include('header.php'); ?>
	<section>
		<div class="container">
			<div class="row">		
				<?php include('left_slidebar.php'); ?>			
				<?php 
				$id = $_GET['id'];
				$conn=mysqli_connect("localhost","root","","myshop");
				$sql = "SELECT * FROM hanghoa WHERE id=$id";
				$query = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($query);
				?>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="admin/img/<?php echo $row['linkimage']; ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $row['tenmathang']; ?></h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>Giá:<?php echo number_format($row['gia']); ?></span>
									<label>Số lượng:</label>
									<input type="text" value="<?php $_SESSION['cart'][$row['id']]; ?>" />
									
								</span>
								<a href="addcart.php?item=<?php echo $row['id']; ?>" class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
										Add to cart
								</a>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12" >
										<div class="vote container mt-5">
										    <div class="card">
										        <div class="row no-gutters">
										            <div class="col-md-4 border-right">
										                <div class="ratings text-center p-4 py-5">
										                <?php  
										                $con=mysqli_connect("localhost","root","","myshop");
										                $sum="SELECT AVG(rate) AS 'trungbinh' FROM binhluan WHERE idsanpham=$id";
										                $result=mysqli_query($con,$sum);
										                $avg = mysqli_fetch_assoc($result);
										                $formatted_number = number_format($avg['trungbinh'],2);
										                ?> 
										                <?php  
										                $connect=mysqli_connect("localhost","root","","myshop");
										                $product="SELECT * FROM binhluan WHERE idsanpham=$id";
										                $query_product=mysqli_query($connect,$product);
										                $total = $query_product->num_rows;
										                // số lượng đánh giá 5 sao và phần trăm.
										                $star5="SELECT * FROM binhluan WHERE idsanpham=$id AND rate=5";
										                $query_star5=mysqli_query($connect,$star5);
										                $total_star5 = $query_star5->num_rows;
										                $row_star5= mysqli_fetch_assoc($query_star5);
										                $vote5=($total_star5/$total)*100;
										                // số lượng đánh giá 4 sao và phần trăm.
										                $star4="SELECT * FROM binhluan WHERE idsanpham=$id AND rate=4";
										                $query_star4=mysqli_query($connect,$star4);
										                $total_star4 = $query_star4->num_rows;
										                $row_star4= mysqli_fetch_assoc($query_star4);
										                $vote4=($total_star4/$total)*100;
										                // số lượng đánh giá 3 sao và phần trăm.
										                $star3="SELECT * FROM binhluan WHERE idsanpham=$id AND rate=3";
										                $query_star3=mysqli_query($connect,$star3);
										                $total_star3 = $query_star3->num_rows;
										                $row_star3= mysqli_fetch_assoc($query_star3);
										                $vote3=($total_star3/$total)*100;
										                // số lượng đánh giá 2 sao và phần trăm.
										                $star2="SELECT * FROM binhluan WHERE idsanpham=$id AND rate=2";
										                $query_star2=mysqli_query($connect,$star2);
										                $total_star2 = $query_star2->num_rows;
										                $row_star2= mysqli_fetch_assoc($query_star2);
										                $vote2=($total_star2/$total)*100;
										                // số lượng đánh giá 1 sao và phần trăm.
										                $star1="SELECT * FROM binhluan WHERE idsanpham=$id AND rate=1";
										                $query_star1=mysqli_query($connect,$star1);
										                $total_star1 = $query_star1->num_rows;
										                $row_star1= mysqli_fetch_assoc($query_star1);
										                $vote1=($total_star1/$total)*100;
										                
										                ?>
										                	<span class="badge bg-success"> <?php echo $formatted_number; ?><i class="fa fa-star-o"></i>
										                	</span>
										                	<div>
											                	<span class="d-block about-rating">Tổng đánh giá:</span> 
											                	<span class="d-block total-ratings" style="font-weight: bold;margin-top: 30px;"><?php echo $total; ?></span> 
											                </div>
										                </div>
										            </div>
										            <div class="col-md-8">
										                <div class="rating-progress-bars p-3">
										                    <div class="progress-1 align-items-center">
										                        <div class="progress">
										                            <div  class="progress-bar bg-success" role="progressbar" style="width: <?php echo number_format($vote5); ?>%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> <?php echo number_format($vote5); ?>% </div> <div><b style="float: right;color: #000000;"><?php echo $total_star5; ?></b></div> 
										                        </div>
										                        <div class="progress">
										                            <div class="progress-bar bg-custom" role="progressbar" style="width: <?php echo number_format($vote4); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($vote4); ?>%</div> <span style="float: right;color: #000000;"><b><?php echo $total_star4; ?></b></span>
										                        </div>
										                        <div class="progress">
										                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo number_format($vote3); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($vote3);?>%</div> <span style="float: right;color: #000000;"><b><?php echo $total_star3; ?></b></span>
										                        </div>
										                        <div class="progress">
										                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo number_format($vote2); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($vote2); ?>%</div> <span style="float: right;color: #000000;"><b><?php echo $total_star2; ?></b></span>
										                        </div>
										                        <div class="progress">
										                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo number_format($vote1); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($vote1); ?>%</div> <span style="float: right;color: #000000;"><b><?php echo $total_star1; ?></b></span>
										                        </div>
										                    </div>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>
										<p><b>Viết bình luận/Đánh giá:</b></p>
										<span>
											<a href=""><i class="fa fa-user"></i><b><?php echo $_SESSION['usernamee']; ?></b></a>	
										</span>
										<textarea name="noidung"  id="noidungbinhluan" ></textarea>
										<script type="text/javascript">
											
										</script>

										<div style="margin-bottom: 3%">
											<div class="rate container d-flex justify-content-center mt-200">
											    <div class="row">
											        <div class="col-md-12">
											        	<b>Đánh giá:</b>
											            <div class="stars">

											                <form action=""><input class="star star-5" id="star-5" type="radio" name="star" value="5" /> <label class="star star-5" for="star-5"></label> <input class="star star-4" id="star-4" type="radio" name="star" value="4" /> <label class="star star-4" for="star-4"></label> <input class="star star-3" id="star-3" type="radio" name="star" value="3" /> <label class="star star-3" for="star-3"></label> <input class="star star-2" id="star-2" type="radio" name="star" value="2" /> <label class="star star-2" for="star-2"></label> <input class="star star-1" id="star-1" type="radio" name="star" value="1" /> <label class="star star-1" for="star-1"></label> </form>
											            </div>
											        </div>
											    </div>
											</div>
											<button type="submit" id="guibinhluan" class="btn btn-default pull-right">
												Gửi
											</button>
										</div>
									<div id="dsbinhluan">
										<?php
										$con=mysqli_connect("localhost","root","","myshop");  
										$sqll = "SELECT * FROM binhluan WHERE idsanpham=$id ORDER BY id DESC ";
										$query1=mysqli_query($con,$sqll);  
										while ($dong = mysqli_fetch_assoc($query1)) {
											$idd= $dong['iduser'];
											$idbinhluan=$dong['id'];
											$rate=$dong['rate'];
										?>
											<div>
													<?php
														$con=mysqli_connect("localhost","root","","myshop"); 
														$sqlll="SELECT * FROM user WHERE id=$idd";
														$query2=mysqli_query($con,$sqlll);
														$dong1=mysqli_fetch_assoc($query2);
													?>
												<ul>
													<li><a href=""><i class="fa fa-user"></i><?php echo $dong1['username']; ?></a></li>
													<li><a href=""><i class="fa fa-clock-o"></i><?php echo $dong['gio']; ?></a></li>
													<li><a href=""><i class="fa fa-calendar-o"></i><?php echo $dong['ngay']; ?></a></li><br>
													<li >
														<?php  
														if($rate==1){
															echo '<i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i>';
														}
														if($rate==2){
															echo '<i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i>';
														}
														if($rate==3){
															echo '<i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i>';
														}
														if($rate==4){
															echo '<i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star-o" style="color: #FE980F"></i>';
														}
														if($rate==5){
															echo '<i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i><i class="fa fa fa-star" style="color: #FE980F"></i>';
														}
														?>
													</li>
												</ul>
												<script>//AJax
													$(document).ready(function(){
														$("#id<?php echo ($idbinhluan); ?>").click(function(){
															var idhh= $("#id").val();
														  	var idbl = $("#idd<?php echo ($idbinhluan);?>").val();
														    var txtt = $("#noidungbinhluan<?php echo ($idbinhluan); ?>").val();
														    $.post("xl_replycmt.php", {id: idhh, noidungg: txtt, idbinhluan: idbl }, function(result){
														      $("#dsbinhluan").html(result);
															});
														});
													});
												</script>
												<p><?php echo $dong['noidung']; ?></p>
												Trả lời: <input type="text" name="noidungbinhluan1" id="noidungbinhluan<?php echo $idbinhluan; ?>" size="2" style="width: 50%">
												<input type="hidden" id="id" value="<?php echo $id;?>">
												<input type="hidden" id="idd<?php echo $idbinhluan; ?>" value="<?php echo $idbinhluan; ?>"> 
												<button type="submit" name="guibinhluan1" id="id<?php echo $idbinhluan; ?>" class="btn-outline-warning">
												Gửi <?php echo $idbinhluan; ?>
												</button>
												
											</div>
											<div class="ml-5" style="margin-left: 10%;background-color: #D8D8D8;">
												
													<?php
													$con=mysqli_connect("localhost","root","","myshop"); 
													$sqlllll="SELECT * FROM replycomment WHERE idbinhluan=$idbinhluan ";
													$query3=mysqli_query($con,$sqlllll);
													?>
													<?php	
													while ($dong2=mysqli_fetch_assoc($query3)){
													$iduu=$dong2['iduserr'];
													$con=mysqli_connect("localhost","root","","myshop"); 
													$sqllllll="SELECT * FROM user WHERE id=$iduu";
													$query4=mysqli_query($con,$sqllllll);
													$dong3=mysqli_fetch_assoc($query4);
													?>
													<ul style="background-color:#BDBDBD ; border-radius: 10%;margin-top: 3%">
														<li><a href=""><i class="fa fa-user"></i><?php echo $dong3['username']; ?></a></li>
														<li><a href=""><i class="fa fa-clock-o"></i><?php echo $dong2['gioo']; ?></a></li>
														<li><a href=""><i class="fa fa-calendar-o"></i><?php echo $dong2['ngayy']; ?></a></li>
													</ul>
													<p><?php echo $dong2['traloi']; ?></p>
													<?php 
													} 
													?>
											</div>
										<?php  
										}
										?>
										
									</div>
										
									
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
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
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
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
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>