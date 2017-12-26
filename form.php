<?php 
	include'sql.php';
	$sql = "SELECT * FROM danhmuc";
	$result = $connect -> prepare($sql);
	$result -> execute();
	$result -> setFetchMode(PDO::FETCH_ASSOC);
	$result = $result->fetchAll();

	$select1=$connect->prepare("SELECT * FROM nhacungcap");
	$select1->execute();
	$select1->setFetchMode(PDO::FETCH_ASSOC);
	$result1=$select1->fetchAll();
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">	
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Ten san pham</label>
				<input type="text" name="tensp" class="form-control" placeholder="Ten san pham">
			</div>
			<div class="form-group">
				<label for="">Gia san pham</label>
				<input type="text" name="giasp" class="form-control" placeholder="Gia san pham">
			</div>
			<div class="form-group">
				<label for="">Danh muc</label>
				<select name="dm" id="sell" class="form-control">
					<?php  foreach ($result as $key => $value) { ?>
						<option value="<?php echo $value['id'];?>"><?php echo $value['danhmuc'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Nha cung cap</label>
				<select name="ncc" id="sell" class="form-control">
					<?php  foreach ($result1 as $key => $value) { ?>
						<option value="<?php echo $value['id'];?>"><?php echo $value['nhacungcap'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<input type="file" name="fileToUpload" class="form-control" placeholder="">
			</div>
			<button class="btn btn-primary active" type="submit" name="submit">Them</button>
		</form>
	</div>
</body>
</html>