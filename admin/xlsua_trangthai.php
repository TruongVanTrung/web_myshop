<?php  
  if(isset($_POST['submit'])){
      $trangthai = $_POST['trangthai'];
      $idd= $_POST['id'];
      $use=$_POST['usernamee'];
      $conn = mysqli_connect("localhost","root","","myshop");
      $sql = "UPDATE donhang SET idtrangthai = '$trangthai' WHERE id='$idd'";
      $query= mysqli_query($conn, $sql);
      $sqll = "SELECT * FROM donhang WHERE id='$idd'";
      $queryy= mysqli_query($conn, $sqll); 
      $row=mysqli_fetch_assoc($queryy);
      $idtrangthai=$row['idtrangthai'];
      $sqlll = "SELECT * FROM trangthai WHERE id='$idtrangthai'";
      $queryyy= mysqli_query($conn, $sqlll); 
      $row1=mysqli_fetch_assoc($queryyy);
      $tentrangthai=$row1['trangthai'];
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
      $mail->addAddress($use, 'Hóa đơn');     // Add a recipient
      $mail->addAddress('vantrung8082k1@gmail.com','admin');               // Name is optional
      
      $mail->Port = 587; 
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'E-SHOPPER.com';
      $mail->Body    = '<p>Đơn hàng của bạn có ID:'.$idd.'.Có trạng thái mới là:'.$tentrangthai.'.</p><p> VUI LÒNG THEO DÕI TRẠNG THÁI ĐƠN HÀNG ĐỂ NHẬN HÀNG.</p><p><b>CẢM ƠN QUÝ KHÁCH</b></p>'		
    ;
      $mail->CharSet = "utf-8";
      if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' .$mail->ErrorInfo;
      } else {
        header("location:cart.php");
      }
	}
	header("location:donhang.php");
?>