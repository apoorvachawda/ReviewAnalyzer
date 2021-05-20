<?php
	session_start(); 
	$pid = $_GET['pid'];
	$login = $_GET['login'];
	$username = $_GET['username'];
	if($login==0)
		echo "<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Login to SHOP!!!')
				window.location.href='sign-in.php'
				</SCRIPT>";
    include("login_header.php");
	$conn = mysqli_connect("localhost","root","","ita_project");
	mysqli_select_db($conn,"ita_project");
	$sql = "SELECT * FROM products where pid = '$pid'"; 
	$result = $conn->query($sql);
	$row = mysqli_fetch_array($result);
	$pname = $row['pname'];
	$price = $row['price'];
	$info = $row['info'];
	$rating = $row['rating'];
	$image = $row['image'];

	$sql1 = "SELECT username,email,review FROM reviews where pid = '$pid'";
	$result1 = $conn->query($sql1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Men's Wear</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css1/style2.css">

<style>
    row{
        margin: 50px;
    }

    .qty{
        margin-left: 30px;
        margin-right: 30px;
    }
</style>
</head>

<body>
    <form action='confirm-order.php?action=0' method='get' class = 'container my-4 py-4'>
        <input type="hidden" name="pid" value="<?php echo $pid ?>">
        <input type="hidden" name="login" value="<?php echo $login ?>">
        <input type="hidden" name="username" value="<?php echo $username ?>"> 
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
                <?php echo "<div class='card text-center' style='width: 800px; border: none;'>
                                <img class='card-img-top' src='images/men/{$image}' alt='{$pid}' style = 'border: solid 1px grey; border-radius: 7px;'>
                                <p align='center'>(hover over image to zoom in)</p>
                            </div>"
                ?>
            </div>
            <div class="col-md-8" style = "padding-left: 40px;">
                <div class="row">
                    <?php echo "<span style = 'font-size: 1.5rem;'>{$pname}</span>";
                    if($rating <= 2.5)
                                {
                                    echo "<span class='badge badge-danger' style = 'height: 20px; margin-left:10px; margin-top:10px;'>{$rating}<span class = 'fa fa-star checked ml-1'></span></span>";
                                }
                                else if($rating <= 3.75)
                                {
                                    echo "<span class='badge badge-warning' style = 'height: 20px; margin-left:10px; margin-top:10px;'>{$rating}<span class = 'fa fa-star checked ml-1'></span></span>";
                                }
                                else if($rating <= 5.00)
                                {
                                    echo "<span class='badge badge-success' style = 'height: 20px; margin-left:10px; margin-top:10px;'>{$rating}<span class = 'fa fa-star checked ml-1'></span></span>";
                                }
                    ?>
                </div>
                <div class="row" style = "margin-top: 10px; font-size: 1.8rem;">
                    <?php echo "<b>Rs. {$price}</b>"?>
                </div>
                <div class="row" style = "padding-top: 40px;">
                    <div class="col-md-2">
                        <p style = "color: grey;">Description</p>
                    </div>
                    <div class="col-md-10">
                        <?php echo "{$info}" ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p style = "color: grey;">Rating</p>
                    </div>
                    <div class="col-md-10">
                        <?php echo "{$rating}"?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p style = "color: grey;">Reviews</p>
                    </div>
                    <div class="col-md-10">
                        <?php
						while($row1 = mysqli_fetch_assoc($result1))
						{
							// echo "<br>";
							$username = $row1['username'];
							$review = $row1['review'];
							
							echo "<p>{$username}<br>{$review}</p><br>";
						}
						?>
                    </div>
                </div>
                <div class="row mt-4">
                    <span style = "color: grey;">Enter quantity: </span>
                    <input type="text" class = "qty" name="quantity" style = "border: none; border-bottom: solid 1px grey;">
                </div>
                <div class="row mt-4">
                    <div class="col-md-2">
                        <p style = "color: grey;">Size</p>
                    </div>
                    <div class="col-md-10">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select your size</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">XS</a>
                                <a class="dropdown-item" href="#">S</a>
                                <a class="dropdown-item" href="#">M</a>
                                <a class="dropdown-item" href="#">L</a>
                                <a class="dropdown-item" href="#">XL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mr-4" style = "margin-top: 30px;">
                    <input type="submit" class="btn btn-success" name="submit" value="Place Order">
                </div>
            </div>
        </div>
    </form>
    <!-- footer begins here -->
    <footer class="blog-footer bg-light d-flex flex-column align-items-center p-3">
        <p>Lorem ipsum dolor sit amet</p>
        <p><a href="index.html">Back to top</a></p>
    </footer>
    <!-- footer ends here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script>
        $(function(){

    $(".dropdown-menu a").click(function(){

      $(".dropdown-toggle:first-child").text($(this).text());
      $(".dropdown-toggle:first-child").val($(this).text());

   });

});
    </script>
    </body>
    </html>

