<?php
	//header("Cache-Control", "no-cache, no-store, must-revalidate");
	session_start();
	$conn = mysqli_connect("localhost","root","","ita_project");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$conn = mysqli_connect("localhost","root","", "ita_project");
	mysqli_select_db($conn,"ita");
	//$sql = "SELECT * FROM products where pid like '1%' ORDER BY pid "; 
	$sql = "select * from reviews";
	$result = $conn->query($sql);
?>
<HTML>
<HEAD>
<TITLE>Review Monitoring</TITLE>

<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<!-- MD Bootstrap -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
<style type="text/css">
		h3{
			text-align: center;
			margin: 50px;
		}
		table{
			width: 80%;
			border-collapse: separate;
			border-spacing: 0 40px;
		}

</style>

</HEAD>
<BODY>
<h3>Review Monitoring</h3>
<table align="center">
		<tr>
			<th><b>Name</b></th>
			<th><b>Email</b></th>
			<th><b>Product</b></th>
			<th><b>Review</b></th>
			<th><b>IP Address</b></th>
			<th><b>Action</b></th>
		</tr>


		<?php 
		while($row = mysqli_fetch_assoc($result))
		{
		?>

		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['pname']; ?></td>
			<td><?php echo $row['review']; ?></td>
			<td><?php echo $row['ip']; ?></td>
			<td><a href="admin-dfr-confirm.php?rid=<?php echo $row['rid']; ?>"><button type="button" class="btn btn-outline-danger"><span class="fa fa-trash-alt"></span></button></a></td>
		</tr>

		<?php 
		}
		?>
				
		<tr>
			<th colspan="10"><a href="ita-admin.php"><button type="button" class="btn btn-primary">Back to Menu</button></a></th>
		</tr>
	</table>		

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</BODY>
</HTML>

