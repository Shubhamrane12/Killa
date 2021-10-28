<?php

session_start();

$con=mysqli_connect('127.0.0.1','root','','blogbllog');


$name= $_POST['user'];
$pass= $_POST['password'];

$s= "select * from user where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

echo "<script>alert('before if')</script>";
if($name == 'admin' and $pass == 'Admin@12'){
	echo "<script>console.log('inside if')</script>";

	$_SESSION['username'] = $name;
	
	echo 'hi';
	header('location:admin.php');
}

elseif($num==1){
	$_SESSION['username'] = $name;
	// $_SESSION['status'] = "login";
	echo 'hi';
	header('location:killa.php?status=login');
}
else{
	header('location:account.html');
}

?>