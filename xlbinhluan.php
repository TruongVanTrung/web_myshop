<?php  
session_start();
?>
<?php

	$date =date("Y/m/d");
	$time= date("H:i");
	$noidung = $_POST['noidung'];
	$idu = $_SESSION['id'];
	$id = $_POST['idsanpham'];
	$rate=$_POST['rate'];
if(isset($_SESSION['id'])){
	$ketnoi=mysqli_connect("localhost","root","","myshop");
	$sql="INSERT INTO binhluan(idsanpham,iduser,noidung,ngay,gio,rate) VALUES('$id','$idu','$noidung','$date','$time','$rate')";
	$query = mysqli_query($ketnoi,$sql); 
}else{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
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
<body>
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
							var idspp = $("#idd<?php echo ($idbinhluan);?>").val();
							var txtt = $("#noidungbinhluan<?php echo ($idbinhluan); ?>").val();
							$.post("xl_replycmt.php", {id: idhh, noidungg: txtt, idbinhluan: idspp }, function(result){
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
</body>
</html>
										

									
