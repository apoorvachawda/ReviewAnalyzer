<?php
	session_start();
	header("Cache-Control", "no-cache, no-store, must-revalidate");
	$login = $_GET['login'];
	$username = "Dummy";
	if($login==0) 
		include("header.php");
	if($login==1 && isset($_SESSION["user"]))
	{
		$username = $_SESSION["user"];
		include("login_header.php");
	}
	$conn = mysqli_connect("localhost","root","","ita_project");
	mysqli_select_db($conn,"ita");
	$sql = "select * from orders where username like '$username' order by pid";
	if ($result = $conn->query($sql))
	{
		
	}
	else
	{
		echo '<br><font face="verdana" color="blue" size="6"><b>You have not purchased any products to write a review!!<b></font>';
		echo '<br><br><img src="images/sad.jpg" height="200px" width="200px" align="center"/><br><br>';
		echo '<h2><a href="sign-out.php"><font face="helvetica" color="red">LOGOUT</font></a></h2>';
	}

?>
<HTML>
<HEAD>
<TITLE>Review Product</TITLE>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Custom CSS -->
<link rel="stylesheet" href="css1/style2.css">

<style>
div.box  {
	width: 500px;
	height: auto;
	border-radius: 7px;
	padding: 20px;
	margin: 5px;
	box-shadow: 0 5px 10px rgba(154,160,185,.05), 0 15px 40px rgba(166,173,201,.2);
	background-color: #FFF;
}

div.box img {
	width: 200px;
	height: 200px;
	/* margin-right: 10px; */
    text-align: center;
    align-content: right;
    align-items: right;
}


div.box h3 {
	text-align: center;
	font-family: arial;
	padding-top: 20px; 
}
div.box h4 {
	text-align: center;
	font-family: arial;
	padding-top: 20px; 
}

div.box input {
	margin-top: 10px;
	margin-bottom: 10px;
	background-color: #5456FF;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

div.box input:hover {
	background-color: #7A97FF; 
    color: white;	
}

div.box textarea {
	width: 420px;
}

.gallery {
	width: 200px;
	height: 200px;
	padding: 35px;
}

</style>

</HEAD>
<body>
<br><br>

<div class="main">
<table align="center">
<?php
	$i=0;
	if ($result = $conn->query($sql))
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$pid = $row['pid'];
			if($i%2==0){
				echo"<tr>";
			}

			$prod = "select * from products where pid='$pid'";
			$res = mysqli_query($conn, $prod);
			$row1 = mysqli_fetch_array($res);

			$category = "";
			if($pid[0]==1)
				$category = "men";
			else if($pid[0]==2)
				$category = "women";
			else if($pid[0]==3)
				$category = "books";
			else if($pid[0]==4)
				$category = "gadgets";
			else if($pid[0]==5)
				$category = "sports";

			$pname = $row['pname'];
			$email = $row['email'];

			echo"<td><div class = 'box'><img src = 'images/{$category}/{$row1[4]}' alt = '{$row['pid']}'>
			<h4><b>{$row['pname']}<b></h4>
			<br>
			<form action = 'review-submit.php?pid=$pid&pname=$pname&email=$email&username=$username&login=$login' method = 'post'>
			<textarea name='comment' rows='5' cols='40'></textarea><br>
			<input type='submit' class='btn btn-primary' align='center' name='submit' value='Submit Review'></input></form></div></td>";
			if($i%2==1){
				echo"</tr>";
			}
			$i++;
		}
	}
?>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</BODY>
</HTML>
