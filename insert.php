<?php 
	if (isset($_POST['submit'])) {
		$name = $_POST['tensp'];
		$giasp = $_POST['giasp'];
		$dm = $_POST['dm'];
		$ncc = $_POST['ncc'];
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		         
		        $uploadOk = 0;
		    }
		}
		// echo "<pre>";
		$name_image = $_FILES["fileToUpload"]['name'];
		$tmp_name = $_FILES["fileToUpload"]['tmp_name'];
		move_uploaded_file($tmp_name, 'upload/'.$name_image); 
		$url_image = 'upload/'.$name_image;
	}
	try {
		require_once"sql.php";
		$sql = "INSERT INTO sanpham(tensanpham,giasanpham,danhmuc,nhacungcap,anh)
				VALUES ('$name','$giasp','$dm','$ncc','$url_image')";
		$connect->exec($sql);
		echo "Ket noi thanh cong";		
	} catch (Exception $e) {
		echo "Ket noi that bai".$e->getMessage();
	}
	header("location: show.php");
 ?>