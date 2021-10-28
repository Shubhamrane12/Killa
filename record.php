<?php
    $connf=mysqli_connect('127.0.0.1','root','','blogbllog');
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $category = $_POST['category'];
    $subject = $_POST['subject'];
    $sql = "insert into feedback (fname,lname,category,subject) values ('$fname', '$lname', '$category', '$subject')";
    mysqli_query($connf, $sql);
    header('location:as.php?status=record');
?>