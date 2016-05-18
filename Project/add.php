<?php 
include 'connection.php';
if (isset($_POST['submit'])){
	$brand=$_POST['brand'];
	$model=$_POST['model'];
	$price=$_POST['price'];
	$about=$_POST['about'];
	$image=$_FILES['image']['name'];
	$cat=$_POST['category'];
	mysql_query("INSERT INTO `product`(`brand`, `model`, `price`, `about`, `image`, `category`) VALUES ('$brand','$model','$price','$about','$image','$cat')");
}
header("location: project.php");
 ?>