				<div class="col-sm-3">
					<div class="left-sidebar">
						
						<?php 
						  	$conn = mysqli_connect("localhost","root","","myshop");
						  	$sql = "SELECT * FROM loaihang";
						  	$ketnoii= mysqli_query($conn,$sql);
						?>
						<h2>Loại mặt hàng</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div  class="panel-heading"  >
									<h4 id="all" class="panel-title" style="cursor:pointer;color:black;">		
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Tất cả
									</h4>
								</div>
		  						<?php 	
		  						while ( $row = mysqli_fetch_assoc($ketnoii)) {
		  							$id = $row['id'];
		  						?>
		  						<script>//AJax
									$(document).ready(function(){
										$("#<?php echo ($id); ?>").click(function(){
											var ten = $("#<?php echo ($id); ?>").attr("id");
											$.post("xl_loaihang.php", { tenlh: ten}, function(result){
												$("#dssanpham").html(result);
											});
										});
									});
								</script>
								<div  class="panel-heading"  >
									<h4 class="panel-title" style="cursor:pointer;color:black;">		
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<?php echo '<span id="'.$id.'" >'.$row['tenloaihang'].'</span>'; ?> 
									</h4>
								</div>
								<?php 
								}
								?>
							</div>						
						</div><!--/category-products-->
						<?php 
						  	$con = mysqli_connect("localhost","root","","myshop");
						  	$sqll = "SELECT * FROM danhmuc";
						  	$query= mysqli_query($con,$sqll);
						?>
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu</h2>
							<?php 	
		  					while ( $row1 = mysqli_fetch_assoc($query)) { 
		  					?>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li ><span class="pull-right"></span style="cursor:pointer;color:black;"><?php echo'<a href="hanghoa.php?iddanhmuc='.$row1['id'].'">'.$row1['tendanhmuc'].'</a>'; ?></li>
								</ul>
							</div>
							<?php
							} 
							?>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>

							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="1" data-slider-max="100" data-slider-step="1" data-slider-value="[30]" id="sl2" ><br />
								 <b class="pull-left">1 Tr</b> <b class="pull-right">100 Tr</b><br/><br/>
								 
								 <button type="submit" id="button">Gửi</button>
							</div>

						</div><!--/price-range-->
						<script type="text/javascript">
							
							$("#button").click(function(){
								var input = $("#sl2").val();
								var str = input.split(10);
								

								alert(str);
							});
						</script>
						<div class="shipping text-center"><!--shipping-->
							<img src="" alt="" />
						</div><!--/shipping-->
						
					</div>

				</div>