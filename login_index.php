<?php
	//header("Cache-Control", "no-cache, no-store, must-revalidate");
	session_start();
	$login = $_GET['login'];
	$username = "Dummy";
	if($login==1 && isset($_SESSION["user"]))
	{
		$username = $_SESSION["user"];
	}
	$conn = mysqli_connect("localhost","root","","ita_project");
	
	mysqli_select_db($conn,"ita_project");

	//checking for connection error
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css1/style2.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <!-- navbar begins here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">ReviewAnalyzer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <?php echo "<a class='nav-link' href='login_index.php?login=$login & username=$username'>Home <span class='sr-only'>(current)</span></a>" ?>
                </li>
                <li class="nav-item">
                    <?php echo"<a class='nav-link' href='review-product.php?login=$login&username=$username'>Review</a>" ?>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php echo "<a class='dropdown-item' href='men.php?login=$login & username=$username'>Men</a>" ?>
                        <?php echo "<a class='dropdown-item' href='women.php?login=$login & username=$username'>Women</a>" ?>
                        <?php echo "<a class='dropdown-item' href='sports.php?login=$login & username=$username'>Sports</a>" ?>
                        <?php echo "<a class='dropdown-item' href='gadgets.php?login=$login & username=$username'>Gadgets</a>" ?>
                        <?php echo "<a class='dropdown-item' href='books.php?login=$login & username=$username'>Books</a>" ?>
                    </div>
                </li>
                <li class="nav-item disabled">
                    <?php echo"<a class='nav-link'>Hello, {$username}</a>"?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-out.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar ends here -->

    <!-- carousel begins here -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1515987913882-11f2c427c484?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Men" style="height: 500px; object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Men</h2>
                    <p>View the latest from men's fashion</p>
                    <a class = "button btn btn-primary" href = "men.php?login=0">Men</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1510678960173-b52e15cbcfb4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Women" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Women</h2>
                    <p>Check out latest trends and accessories</p>
                    <a class="button btn btn-primary" href="women.php?login=0">Women</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1529473814998-077b4fec6770?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Books" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                   <h2>Books</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a class="button btn btn-primary" href="books.php?login=0">Books</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Sports" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Sports</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a class="button btn btn-primary" href="sports.php?login=0">Sports</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Gadgets" style="height: 500px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Electronics</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a class="button btn btn-primary" href="gadgets.php?login=0">Electronics</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- about section begins here -->
    <div class="container my-4 pt-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <h4>Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus aut natus dignissimos ex minima illo tempora dolorum. Itaque ullam ex a veniam nam delectus laborum quae aperiam fugiat dolorem!</p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <h4>Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus aut natus dignissimos ex minima illo tempora dolorum. Itaque ullam ex a veniam nam delectus laborum quae aperiam fugiat dolorem!</p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <h4>Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus aut natus dignissimos ex minima illo tempora dolorum. Itaque ullam ex a veniam nam delectus laborum quae aperiam fugiat dolorem!</p>
            </div>
        </div>
    </div>
    <!-- about section ends here -->

    <hr style = "margin : 70px 0;">

    <!-- trending section begins here -->
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4 d-flex align-self-center justify-content-center">
                <h2>TRENDING NOW.</h2>
            </div>
            <div class="col-md-8">
                <div class="row p-2">
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending1.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending2.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending3.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending4.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending5.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img src="images/trending6.jpg" alt="trending" style="width: 200px; height: 200px;">
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>