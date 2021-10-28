<?php
#$ans=array();
//$cans=array();
session_start();
$count=0;
for ($x = 1; $x < 11; $x++) {
    $q="s".strval($x);
    $a="answer".strval($x);
    $opt=$_POST[$q];
    $b=$_POST[$a];
    echo $opt;
    echo $b;
    if($opt==$b){
        $count++;
        echo $count;
    }
    //array_push($ans,$opt);
    //array_push($cans,$b);
  }
  $_SESSION["salherScore"] = $count;
  header('location:salher.php#Quiz');
  
  
?>