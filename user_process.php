<?php

include ("dbconnect.php");


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

// inserting data to the mysql_list_tables

$query=mysqli_query($db_connect, "INSERT INTO user (name,email,subject,message) VALUES('$name', '$email', '$subject', '$message')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);

header ("location:index.php?note=successful");

 ?>
