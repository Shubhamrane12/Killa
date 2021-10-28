<?php


$con=mysqli_connect('127.0.0.1','root','','blogbllog');

$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];


$s= "UPDATE user SET name = '$name', email= '$email' WHERE id = $id;";

$result=mysqli_query($con,$s);

if($result){
    header('location:admin.php?status=update');
}
else{
    header('location:admin.php?status=fail');
}

?>
