<?php 
	include'sql.php';
	$masp = $_GET['id'];
	$sql = "DELETE FROM sanpham WHERE masv=$masp";
	$connect->exec($sql);
	header("location: show.php")
 ?>