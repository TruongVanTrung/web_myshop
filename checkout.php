<?php
session_start();
unset($_SESSION['id'],$_SESSION['usernamee'],$_SESSION['role']);

header("location:login.php");
exit();
?>