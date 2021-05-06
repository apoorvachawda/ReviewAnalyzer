<?php 
	$pid = $_GET['pid'];
	$treview = $_GET['treview'];

	$myfile = fopen("userReview.txt", "w") or die("Unable to open file!");
	$txt = $treview;
	fwrite($myfile, $txt."\n");
	fclose($myfile);

	$python = 'C:\Users\Apoorva\AppData\Local\Programs\Python\Python39\python.exe';
	$pyscript = 'C:\xampp\htdocs\ita_project\admin\rate.py';

	$rating = exec("$python $pyscript");
		
	$conn = mysqli_connect("localhost","root","","ita_project");
	mysqli_select_db($conn,"ita_project");
	$sql = "update products set rating ='$rating' where pid='$pid';";
	$result = $conn->query($sql);

	if($result){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Product rating updated!!')
				window.location.href='admin-rate-product.php'
				</SCRIPT>");
		echo "done";
	}
?>