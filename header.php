<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" href="css1/style2.css">

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
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    	Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="men.php?login=0">Men</a>
                        <a class="dropdown-item" href="women.php?login=0">Women</a>
                        <a class="dropdown-item" href="sports.php?login=0">Sports</a>
                        <a class="dropdown-item" href="gadgets.php?login=0">Gadgets</a>
                        <a class="dropdown-item" href="books.php?login=0">Books</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-in.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-up.php">Signup</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar ends here -->
</body>
</html>

	<!--header-->
