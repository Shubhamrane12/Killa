<?php

session_start();
$con2=mysqli_connect('127.0.0.1','root','','blogbllog');


$name= $_POST['user'];
$pass= $_POST['password'];
$email= $_POST['email'];

$s= "select * from user where name='$name'";

$result=mysqli_query($con2,$s);

$num=mysqli_num_rows($result);


if($num==1){
	
	echo "<script>alert('username already taken')</script>";
	
}

else{
	$reg="insert into user(name,password,email) values ('$name','$pass','$email')";
	mysqli_query($con2,$reg);
	$_SESSION['username'] = $name;
    header('location:killa.php?status=register');
	
}
?>