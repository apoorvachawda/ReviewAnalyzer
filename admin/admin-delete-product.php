<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","ita_project");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_select_db($conn,"ita");
	if(isset($_POST['submit']))
	{
		$category = $_POST["category"];
		$pid = $_POST["pid"];
		$pname = $_POST["pname"];

		$sql="delete from products where category='$category' and pid='$pid' and pname='$pname'";
		$result = $conn->query($sql);
		if (mysqli_affected_rows($conn)==1) {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Product removed successfully!!')
				window.location.href='admin-delete-product.php'
				</SCRIPT>");
		}
		else
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Error!! No product found')
				window.location.href='admin-delete-product.php'
				</SCRIPT>");
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<!-- MD Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<style type="text/css">
		form{
			background-color: #fff;
			border-radius: 30px;
			height: auto;
			margin-top: 100px;
			box-shadow: 3px 3px 6px 5px rgba(0,0,0,0.15);
			padding: 30px;
		}
		body,html{
			height: 1vh;
		}
		input{
			background-color: transparent;
			border: none;
			border-bottom: solid 1px grey;
		}

	</style>
</head>
<body class="aqua-gradient">
	<div class="d-flex justify-content-center">
		<form action="" method = "post">
		<div class="row">
			<h3 class = "ml-auto mr-auto p-3">Enter product details</h3>
		</div>
		<div class="row">
			<div class="col-md-6"><p>Category<br>(Men-1; Women-2; Books-3; Gadgets-4; Sports-5)</p></div>
			<div class="col-md-6"><input type="text" name="category"></div>
		</div>
		<div class="row">
			<div class="col-md-6"><p>Product ID</p></div>
			<div class="col-md-6"><input type="text" name="pid"></div>
		</div>
		<div class="row">
			<div class="col-md-6"><p>Product Name</p></div>
			<div class="col-md-6"><input type="text" name="pname"></div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<a href="ita-admin.php"><button type="button" class="btn btn-danger float-right">Back to Menu</button></a>
			</div>
			<div class="col-md-6">
				<input type="submit" class="btn btn-success float-left" name="submit" value="Delete Product" align="center">
			</div>
		</div>
	</form>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

