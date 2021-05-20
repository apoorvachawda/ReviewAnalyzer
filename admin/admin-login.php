
<!DOCTYPE html>
<html>
<head>
<title>Online Shopping</title>
<!-- MD Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" href="css1/style2.css">


<style>

body{
  height: 1vh;
}
.login-page {
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  max-width: 460px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
  background-color: #F7F7F7;
  border-radius: 30px;
}
.form input{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: transparent;
  width: 100%;
  border: none;
  border-bottom: solid 1px grey;
  margin-top: 40px;
  /* padding: 15px; */
  box-sizing: border-box;
  font-size: 14px;
}

.form input:active{
  border-bottom: solid 1px black;
}

.form img {
	width: 200px;
}

.form button, .form button:hover{
  border: none;
  box-shadow: none;
  margin-top: 50px;
}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ONLINE SHOPPING" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body class="aqua-gradient">
	<!--header-->
	<!--<div class="col-md-12 wel-grid"> -->
		
	
		<div class="login-page">
  			<div class="form">
    			<img class="imag" src = "../images/admin_login.png">
    			<br>
    			<form class="login-form" action="admin-login-check.php" method="post">
      				<input type="text" placeholder="Username" name="username" required/>
      				<input type="password" placeholder="Password" name="password" required />
      				<button type="submit" name="submit" class = "btn btn-success">Login</button>
    			</form>
  			</div>
		</div>
	</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>