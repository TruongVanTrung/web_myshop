<?php  
	$item_per_page= !empty($_GET['per_page'])?$_GET['per_page']:1;
	$current_page= !empty($_GET['page'])?$_GET['page']:1; 
	$offset= ($current_page-1)*$item_per_page;
	$con= mysqli_connect("localhost","root","","myshop");
	$sqll="SELECT * FROM hanghoa ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
	$query=mysqli_query($con,$sqll);
	$totalproduct = mysqli_query($con,"SELECT * FROM hanghoa");
	$totalproduct = $totalproduct->num_rows;
	$totalpage = ceil($totalproduct/$item_per_page);

?>
<?php 

?>
	