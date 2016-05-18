<?php
	include 'connection.php';
	include 'functions.php';
	session_start(); 
	check_user($_POST['email'],$_POST['password']);

 ?>