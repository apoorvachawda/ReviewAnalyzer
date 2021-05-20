<?php 
	session_start();
	$_SESSION["user"] = $_GET['username'];
	$login = $_GET['login'];
	include("login_header.php");
	$conn = mysqli_connect("localhost","root","","ita_project");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_select_db($conn,"ita");
	if(isset($_GET['submit']))
	{
		$_SESSION["user"] = $_GET['username'];
		$pid = $_GET['pid'];
		$username = $_GET['username'];
		$quantity = $_GET['quantity'];
		$sql = "select * from products where pid = '$pid'";
		$res = $conn->query($sql);
		$row = mysqli_fetch_row($res);

		$sql1 = "select * from users where name='$username'";
		$result = $conn->query($sql1);
		$row1 = mysqli_fetch_row($result);

		$total = $row[3]*$quantity;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Men's Wear</title>
<style type="text/css">
	
	/* table,tr,td {
    	padding: 10px;
    	max-width: 1000px;
    	font-family: Helvetica;
    	font-weight: normal;
    	align-items: center;
    	align-content: center;
	}

	th {
		padding: 30px;
	}

	td input {
		margin-right: auto;
		margin-left: 130px;
		align-self: center;
		align-content: center;
	}

	td p {
		font-family: verdana;
		font-weight: normal;
		color: blue;
	}
	div.box  {
		width: 350px;
		height: 350px;
		border-style: solid;
		border-radius: 15px;
		border-color: #000;
		border-width: 0px;
		padding: 25px;
		margin: 5px;
		text-align: center;
		background-color: #7a97ff;
	}

	div.box img {
		width: 100%;
		height: 100%;
		-webkit-transition-duration: 0.4s; 
    	transition-duration: 0.5s;
	}

	div.box img:hover {
		transform: scale(1.2);
	}
	div.box input {
		text-align: center;
		align-content: center;
		float: center;
		background-color: #4CAF50;
		-webkit-transition-duration: 0.4s; 
   	 	transition-duration: 0.4s;
	}

	div.box input:hover {
		background-color: #367477; 
   	 	color: black;	
	}

	div.re {
		font-family: verdana;
		font-weight: normal;
		color: black;
	} */
</style>
</head>
<body>
	<!--<div class='page'>-->
		<!--<div class='content'>-->
		<form action="place-order.php" method="get">
			<input type="hidden" name="username" value="<?php echo $row1[0] ?>">
			<input type="hidden" name="email" value="<?php echo $row1[1] ?>">
			<input type="hidden" name="pid" value="<?php echo $pid ?>">
			<input type="hidden" name="pname" value="<?php echo $row[2] ?>">
			<input type="hidden" name="price" value="<?php echo $row[3] ?>">
			<input type="hidden" name="quantity" value="<?php echo $quantity ?>">
			<input type="hidden" name="total" value="<?php echo $total ?>">
			<input type="hidden" name="address" value="<?php echo $row1[4] ?>">
			<div class="container d-flex justify-content-center mt-4 shadow" style = "height: 700px;">
				<div class="row mt-4" style="width: 80%;">
					<div class="col-md-12">
						<h3 class = "text-center">Please confirm your order details</h3>
					</div>
					<div class="col-md-5">
						<?php 
							if($row[1][0]=='1')
								echo "<div class = 'text-center'><img src = 'images/men/{$row[4]}' alt = '{$pid}' style = 'width:100%;'><br>{$row[2]}</div>";
							else if($row[1][0]=='2')
								 echo "<div class = 'text-center'><img src = 'images/women/{$row[4]}' alt = '{$pid}' style = 'width:100%;'><br>{$row[2]}</div>";
							else if($row[1][0]=='3')
								 echo "<div class = 'text-center'><img src = 'images/books/{$row[4]}' alt = '{$pid}' style = 'width:100%;'><br>{$row[2]}</div>";
							else if($row[1][0]=='4')
								 echo "<div class = 'text-center'><img src = 'images/gadgets/{$row[4]}' alt = '{$pid}' style = 'width:100%;'><br>{$row[2]}</div>";
							else if($row[1][0]=='5')
								 echo "<div class = 'text-center'><img src = 'images/sports/{$row[4]}' alt = '{$pid}' style = 'width:100%;'><br>{$row[2]}</div>";
						?>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-4" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;">Cost: </p>
							</div>
							<div class="col-md-8" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;"><?php echo $row[3]; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;">Quantity: </p>
							</div>
							<div class="col-md-8" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;"><?php echo $quantity; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;">Total: </p>
							</div>
							<div class="col-md-8" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;"><?php echo "Rs. {$total}" ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;">Delivering to: </p>
							</div>
							<div class="col-md-8" style = "padding: 20px;padding-left:40px;">
								<p style = "color: grey;"><?php echo $row1[0].'<br>';echo $row1[4]; ?></p>
							</div>
						</div>
						<div class="row d-flex justify-content-center">
							<input type="submit" name="submit" class="btn btn-primary" value="Confirm Order">
						</div>
					</div>
				</div>
			</div>

		</form>
			<br><br><br><br>
		<!--</div>-->
	<!--</div>-->
</body>
</html>
<?php 
	// include('footer.php');
?>