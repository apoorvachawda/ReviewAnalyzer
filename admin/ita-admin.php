<?php
	session_start();
	//if($_SESSION("user")!=NULL)
		// include("admin_login_header.php");
	/*else{
		echo("<SCRIPT LANGUAGE='JavaScript'
			window.alert('Login Error!')
			window.location.href='admin-login.php'
			</SCRIPT>");
	}*/
?>

<!DOCTYPE html>
<head>
	<title>Admin</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<!-- MD Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		.options{
			box-shadow: 3px 3px 6px 5px rgba(0,0,0,0.15);
			padding: 30px;
			width: 30%;
			height: 550px;
			border-radius: 30px;
			background-color: #fff;
			margin-top: 120px;
		}
		hr{
			width: 100%;
		}
		ul{
			list-style-type: none;
		}
		a{
			color: grey;
			font-size: 1.2rem;
			margin-left: -20px;
		}
		a:hover{
			text-decoration: none;
			color: turquoise;
		}
		html, body{
			height: 1vh;
		}
		.logout:hover{
			color: red;
		}
	</style>

</head>

<body class = "aqua-gradient ">

<div class="options d-flex flex-column ml-auto mr-auto">
  <h2 class = "text-center text-secondary">Welcome back !</h2>
  <hr>
  <h4 class = "mt-4 text-center">What would you like to do today?</h4>
  <ul class = "mt-4 text-left">
    <li class = "m-3"><a href="admin-add-product.php"><span class="fa-stack fa-2x" style = "font-size: 20px;"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-plus fa-stack-1x fa-inverse"></i></span> Add product</a></li>
    <li class = "m-3"><a href="admin-delete-product.php"><span class="fa-stack fa-2x" style = "font-size: 20px;"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-minus fa-stack-1x fa-inverse"></i></span> Delete product</a></li>
    <li class = "m-3"><a href="admin-delete-review.php"><span class="fa-stack fa-2x" style = "font-size: 20px;"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-times fa-stack-1x fa-inverse"></i></span> Remove reviews</a></li>
    <li class = "m-3"><a href="admin-rate-product.php"><span class="fa-stack fa-2x" style = "font-size: 20px;"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-star fa-stack-1x fa-inverse"></i></span>Rate a product</a></li>
  </ul><hr>
  <a href="admin-sign-out.php" class = "align-self-center logout">Logout</a>
</div>

</body>

</html>