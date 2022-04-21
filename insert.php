<?php>

include 'conn.php';
if(isset($_POST['done']))
{
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$q = "INSERT INTO `crudtable`(`name`, `email`, `address`, `phone`) VALUES ('$Name','$email','$address','$phone')";
	$query = mysqli_query($con,$q);
}

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
	<div class="col-lg-6 m auto">
		<form method="post">
			<br><br><div class="card">
				<div class="card header bg-dark">
				<h1 class="text-white">Add Employee</h1>
					
				</div>
				<label>Name</label>
				<input type="text" name="Name" class="form control"><br>
				<label>email</label>
				<input type="text" name="email"class="form control"><br>
				<label>address</label>
				<input type="text" name="address"><br>
				<label>phone</label>
				<input type="number" name="phone"><br>
				<button class="btn btn-success" type="submit" name="done">Add</button>
				</form>
			</div>

	</body>
	</html>
