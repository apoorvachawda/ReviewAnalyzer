<!DOCTYPE html>
<html>
<head>
<title>Online Shopping</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" href="css1/style2.css">
<style>

.login-page {
  width: 1000px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #fff;
  max-width: 1160px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
 input{
    width: 70%;
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: transparent;
    border: none;
    border-bottom: solid 1px grey;
  }
  input:focus, input:focus-visible{
    outline-style: none;
    border: none;
    border-bottom: solid 1px #000;
  }
button {
  margin-top: 30px;
  width: 55%;
}

.form p {
  margin: 15px 0 0;
}

.form .register-form {
  display: none;
}
.contain {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.contain:before, .contain:after {
  content: "";
  display: block;
  clear: both;
}
.contain .info {
  margin: 50px auto;
  text-align: center;
}
.contain .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.contain .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.contain .info span a {
  color: #000000;
  text-decoration: none;
}
.contain .info span .fa {
  color: #EF3B3A;
}
.return:hover{
  text-decoration: none;
  color: #DD9900;
}
body {
  background-color: #F1F7FC;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ONLINE SHOPPING" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
</head>
<body>

		<!-- <div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">

						<div class="navbar-header">
							<div class="navbar-brand">
								<h2><a href=""><center>Sign Up</center></a></h2>
							</div>
						</div>
					</div>
				</nav>
		    </div>
		</div> -->
	
		<div class="login-page">
  			<div class="form">
  				
    			<form class="login-form" action="user-sign-up.php" method="post">
      			
              <a href = "index.html" class  = "return" style="color: #F58703;"><h3> Return to Home Page </h3></a><br><br>
              <input type="text" placeholder="Enter your full name ( first + middle + last)" name="uname"/>
              <input type="text" placeholder="Enter your email id" name="email" />
      				<input type="password" placeholder="Password (minimum 8 characters)" name="password" />
              <input type="text" placeholder="Enter your contact number" name="phone" />
              <input type="text" placeholder="Enter your Address ( Street + Area + City + Pincode)" name="address" />
      				
      				<button type="submit" name="submit" class = "btn btn-primary">Create</button>
      				<p>Already registered? <a href="sign-in.php"><font color='blue'>Sign In</font></a></p>
    			</form>
    			
    			<br><br>
  			</div>
		</div>
	</div>
</body>
</html>