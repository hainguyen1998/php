<?php 
	include'sql.php';

	$sql = "SELECT * FROM sanpham";
	$result = $connect -> prepare($sql);
	$result -> execute();
	$result -> setFetchMode(PDO::FETCH_ASSOC);
	$result = $result->fetchAll();
	// var_dump($result);die();
	function getName($id){ 
		include'sql.php';
		$sql = "SELECT * FROM danhmuc WHERE id=$id";
		$name = $connect->prepare($sql);
		// var_dump($name); die;
		$name->execute();
		$name = $name->fetch();  
		// var_dump($name);die();
		return $name['danhmuc'];

	}

	function getName1($id){
		include'sql.php';
		$sql1 = "SELECT * FROM nhacungcap WHERE id=$id1";
		$name1 = $connect->prepare($sql1);
		// var_dump($name1); die;
		$name1->execute();
		$name1 = $name1->fetch();  
		// var_dump($name1);die();
		return $name1['nhacungcap'];
	}
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<style>
		img{
			width: 9%;
		}
		.fileToUpload{
			width: 100%;
		}
	</style>
 </head>
 <body>
 	<div class="row">

 		<table class="table table-condensed">
 			<tr>
 				<th>Ten San Pham</th>
 				<th>Gia San Pham</th>
 				<th>Danh Muc</th>
 				<th>Nha Cung Cap</th>
 				<th>Anh</th>
 			</tr>
 		
 				<?php foreach ($result as $key => $value) { ?>	
 			<tr>
 					<td><?php echo $value['tensanpham']; ?></td>
 					<td><?php echo $value['giasanpham'] ?></td>
 					<td><?php echo getName ($value['danhmuc']); ?></td>
 					<td><?php echo getName1 ($value['nhacungcap']); ?></td>
 					<td><img src="<?php echo $value['anh']?>" alt="" class="img-circle"></td>
 					<td><a href="update.php">Sua</a>
 						<a href="delete.php">Xoa</a></td>
 				
 			</tr>
 				<?php	} ?>
 		</table>

 	</div>
 </body>
 </html>