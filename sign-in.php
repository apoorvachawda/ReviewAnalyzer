<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Shopping</title>

<!-- required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ONLINE SHOPPING" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" href="css1/style2.css">

<style>
  body{
    background-color: #F1F7FC;
  }
  a, a:hover{
    text-decoration: none;
  }
  input{
    width: 80%;
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
  button{
    width: 60%;
    margin-top: 80px;
    margin-bottoom: 30px;
  }
  form{
    margin-top: 30px;
  }
  h3{
    color: #F58703;
  }
</style>
</head>
<body>
  <div class="container my-4" style = "box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)">
    <div class="row">
      <div class="col-md-5 col-sm-12" style= "background-image: url('https://images.unsplash.com/photo-1510032518699-36e55fe15658?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxhY2slMjBhbmQlMjB3aGl0ZSUyMHdvbWFufGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); height: 600px;">
      <!-- <img src="https://images.unsplash.com/photo-1510032518699-36e55fe15658?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmxhY2slMjBhbmQlMjB3aGl0ZSUyMHdvbWFufGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="sign-in-image" style="width: 400px; height: 400px;">  -->
      </div>
      <div class="col-md-7 col-sm-12 d-flex justify-content-center align-items-top pt-4" style = "background-color: #fff;">
          <form class="login-form text-center" action="user-sign-in.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <a href = "index.html" class="return"><h3> Return to Home Page </h3></a><br>
              </div>
              <div class="col-lg-12">
                <input type="text" placeholder="Email" name="email"/>
              </div>
            </div>
            <div class="row my-12">
              <div class="col-lg-12">
                <input type="password" placeholder="Password" name="password"/>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" name="submit" class = "btn btn-primary">Login</button>
                <p class="message my-4">Not registered?<a href="sign-up.php"><font color='blue'> Create an account</font></a></p>
              </div>
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
  // include('./footer.php');
?>