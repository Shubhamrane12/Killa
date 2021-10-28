<?php

$con=mysqli_connect('127.0.0.1','root','','blogbllog');

$id=$_POST['id'];
$ques=$_POST['ques'];
$name=$_POST['name'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$ans=$_POST['ans'];

if($name[0] == 'q'){
    $s= "UPDATE question SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
elseif ($name[0] == 's'){
    $s= "UPDATE salher SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
elseif ($name[0] == 'k'){
    $s= "UPDATE koriga SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
elseif ($name[0] == 'r'){
    $s= "UPDATE raigad SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
elseif ($name[0] == 'p'){
    $s= "UPDATE pratapgad SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
elseif ($name[0] == 'j'){
    $s= "UPDATE rajgad SET name = '$name', Question= '$ques', opt1= '$opt1', opt2= '$opt2', opt3= '$opt3', opt4= '$opt4', answer= '$ans' WHERE id = $id;";
}
$result=mysqli_query($con,$s);

if($result){
    header('location:admin.php?status=update');
}
else{
    header('location:admin.php?status=fail');
}

?>