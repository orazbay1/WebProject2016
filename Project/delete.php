<?php
include 'connection.php'; 
$id=$_GET['id'];
mysql_query("DELETE FROM `product` WHERE id='$id'");
header("location: project.php");
 ?>