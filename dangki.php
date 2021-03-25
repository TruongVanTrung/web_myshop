<?php 
	$messs='';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uu = $_POST["usernamee"];
		$pp = md5($_POST["passwordd"]);
		$role=2;
		$con = mysqli_connect("localhost","root","","myshop");
		$sqll = "SELECT id FROM user WHERE username='$uu'";
		$query = mysqli_query($con, $sqll);
		if (mysqli_num_rows($query)>0) {
			$messs="Tên đăng nhập này đã tồn tại";
			echo ' <script type="text/javascript"> alert("'.$messs.'")</script>';
		}else{
			$sqll = "INSERT INTO user(username,password,idrole) VALUES('$uu','$pp','$role')";
			$query = mysqli_query($con, $sqll);
			$messs ="Bạn đã đăng kí thành công";
			echo '<script type="text/javascript"> alert("'.$messs.'")</script>';
			header("localhost: login.php");
		}
	}			
?>