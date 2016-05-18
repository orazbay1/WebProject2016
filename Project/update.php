<?php 
	include 'connection.php';
if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$brand=$_POST['brand'];
	$model=$_POST['model'];
	$price=$_POST['price'];
	$about=$_POST['about'];
	$cat=$_POST['category'];
	mysql_query("UPDATE `product` SET `brand`='$brand',`model`='$model',`price`='$price',`about`='$about',`category`='$cat' WHERE id='$id'");
	header('location: project.php');
}
 ?>