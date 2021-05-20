<?php
	session_start();
	$login = $_GET['login'];
	$username = "Dummy";
	if($login==0) 
	{	
		include("header.php");
	}
	else if($login==1 && isset($_SESSION["user"]))
	{
		$username = $_SESSION["user"];
		include("login_header.php");
	}
	$conn = mysqli_connect("localhost","root","","ita_project");
	
	mysqli_select_db($conn,"ita_project");

	//checking for connection error
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
}

	$sql = "SELECT * FROM products where pid like '1%' ORDER BY pid "; 

	$result = $conn->query($sql);
?>
<HTML>
<HEAD>

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
    <link rel="stylesheet" href="css1/style2.css">


<TITLE>Men's Wear</TITLE>
<style>
.main{
	margin-top: 50px;
}

.box  {
	width: 300px;
	height: 470px;
	padding-top: 20px;
	padding-right: 25px;
	padding-left: 25px;
	padding-bottom: 370px;
	margin: 5px;
	text-align: center;

}

.box:hover{
	box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
}

div.box img {
	width: 100%;
	height: 230px;

}


div.box h3 {
	text-align: center;
	font-family: arial;
	padding-top: 20px; 
}
div.box h5 {
	text-align: center;
	font-family: Times New Roman;
	padding-top: 20px; 
}

div.box input {
	text-align: center;
	align-content: center;
	float: center;
	margin-bottom: 30px;
}

.gallery {
	width: 200px;
	height: 200px;
	padding: 35px;
}

</style>

</HEAD>
<BODY>

<div class="main">
<table align="center">
<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result))
	{
		$pid = $row['pid'];
		$login = $_GET['login'];
		//echo "$name";
		if($i%3==0){
			echo"<tr>";
		}
		echo"<td><div class = 'box'><img src = 'images/men/{$row['image']}' alt = '{$row['pid']}'>
		<h5><b>{$row['pname']}<b></h5>
		<h4 style='color: green;'>Rs.{$row['price']}</h4>
		<br>
		<form action = 'men_shop2.php?pid=$pid & login=$login & username=$username' method = 'post' class='d-flex justify-content-center'>
		<input type='submit' class='btn btn-block btn-outline-primary' style = 'width: 35%;' name='{$pid}' value='Buy'></input></form></div></td>";
		if($i%3==2){
			echo"</tr>";
		}
		$i++;
	} 
?>
</table>
</div>
<!-- footer begins here -->
    <footer class="blog-footer bg-light d-flex flex-column align-items-center p-3">
        <p>Lorem ipsum dolor sit amet</p>
        <p><a href="index.html">Back to top</a></p>
    </footer>
    <!-- footer ends here -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</BODY>
</HTML>

