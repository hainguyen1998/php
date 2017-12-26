<?php
	$host="localhost";
	$username="root";
	$password="";
	$dbname="quanlysanpham";
	$connect= new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
	$connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
 ?>