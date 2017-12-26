<?php 
	require_once "sql.php";
	$id = $_GET['id'];
	if (isset($_POST['submit'])) {
		$name = $_POST['tensp'];
		$giasp = $_POST['giasp'];
		$danhmuc = $_POST['dm'];
		$ncc = $_POST['ncc'];	}
	$sql = "UPDATE sanpham SET  tensanpham='$name', giasanpham ='$giasp', danhmuc = '$dm', nhacungcap ='$ncc' WHERE id ='$id' ";
	$connect->exec($sql);
	header("location: form.php");
 ?>