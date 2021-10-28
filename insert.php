<?php

$con=mysqli_connect('127.0.0.1','root','','blogbllog');

$id = $_POST['id0'];
$question = $_POST['question'];
$name1 = $_POST['name'];
$opt1 = $_POST['opt1'];
$opt2 = $_POST['opt2'];
$opt3 = $_POST['opt3'];
$opt4 = $_POST['opt4'];
$ans = $_POST['ans'];

if($name1[0] == 'q'){
  $sql = "INSERT INTO question (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
elseif ($name1[0] == 's') {
  $sql = "INSERT INTO salher (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
elseif ($name1[0] == 'k') {
  $sql = "INSERT INTO koriga (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
elseif ($name1[0] == 'r') {
  $sql = "INSERT INTO raigad (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
elseif ($name1[0] == 'p') {
  $sql = "INSERT INTO pratapgad (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
elseif ($name1[0] == 'j') {
  $sql = "INSERT INTO rajgad (id, question, name, opt1, opt2, opt3, opt4, answer) VALUES ('$id', '$question', '$name1', '$opt1', '$opt2', '$opt3', '$opt4', '$ans');";
}
if (mysqli_query($con, $sql)) {
  // echo "New record created successfully";
  header('location:admin.php?status=insert');
} else {
  // echo "Error: " . $sql . "<br>" . mysqli_error($con);
  header('location:admin.php?status=fail');
}

?>

