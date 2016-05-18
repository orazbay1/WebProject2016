<?php
	session_start();
	include 'connection.php'; 
	$my_id=$_SESSION['id'];
	$prod_id=$_GET['id'];
	$res=mysql_query("SELECT `box` FROM `users` WHERE id='$my_id'");
	$arr=mysql_fetch_array($res);
	$box=unserialize($arr['box']);
	$box[]=$prod_id;
	$box=serialize($box);
	mysql_query("UPDATE `users` SET `box`='$box' WHERE id='$my_id'");
	
	header("location: project.php");
 ?>