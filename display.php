<?php

include 'conn.php';


	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$q = "select * from crudtable";
	$query = mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="text-warning text-center">Display Table Data</h1>
			<table class="table table-striped table-hover table-bordered">
				<tr>
					
				<th>Name</th>
				<th>email</th>
				<th>address</th>
				<th>phone</th>
				<th>add</th>
				<th>delete</th>
				</tr>
				<?php

include 'conn.php';


	
	$q = "select * from crudtable";
	$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){
?>
				<tr>
					<td><?php echo $res['Name'];?</td>
				<td><?php echo $res['email'];?</td>
				<td><?php echo $res['address'];?</td>
				<td><?php echo $res['phone'];?</td>
				<td><button class="btn-danger btn"><a href="delete.php?Name=<?php echo $res['Name'];?>"class="text-white">Delete</a></button></td>
				<td><?php echo $res['Name'];?</td>
					
				</tr>
				<?php{
				?>
}}
			</table>
			
		</div>
		
	</div>
	
</body>
</html>