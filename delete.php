<?php


$con=mysqli_connect('127.0.0.1','root','','blogbllog');

$id=$_REQUEST['id'];
$from=$_REQUEST['from'];

$userQuery = "DELETE FROM user WHERE id = $id;";
$blogQuery = "DELETE FROM blog WHERE id = $id;";
// $feedbackQuery = "DELETE FROM feedback WHERE id = $id;";
$vishalQuery = "DELETE FROM question WHERE id = $id;";
$salherQuery = "DELETE FROM salher WHERE id = $id;";
$koriQuery = "DELETE FROM koriga WHERE id = $id;";
$raiQuery = "DELETE FROM raigad WHERE id = $id;";
$pratapQuery = "DELETE FROM pratapgad WHERE id = $id;";
$rajQuery = "DELETE FROM rajgad WHERE id = $id;";

if($from == "user"){
    $result=mysqli_query($con,$userQuery);
}
elseif ($from == "blog") {
    $result=mysqli_query($con,$blogQuery);
}
// elseif ($from == "feedback") {
//     $result=mysqli_query($con,$feedbackQuery);
// }
elseif ($from == "vishalgad") {
    $result=mysqli_query($con,$vishalQuery);
}
elseif ($from == "salher") {
    $result=mysqli_query($con,$salherQuery);
}
elseif ($from == "korigad") {
    $result=mysqli_query($con,$koriQuery);
}
elseif ($from == "raigad") {
    $result=mysqli_query($con,$raiQuery);
}
elseif ($from == "pratapgad") {
    $result=mysqli_query($con,$pratapQuery);
}
elseif ($from == "rajgad") {
    $result=mysqli_query($con,$rajQuery);
}




if($result){
    header('location:admin.php?status=delete');
}
else{
    header('location:admin.php?status=fail');  
}




?>