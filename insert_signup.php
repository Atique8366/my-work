<?php

$n=$_REQUEST['n'];
$d=$_REQUEST['dob'];
$p=$_REQUEST['ps'];
$em=$_REQUEST['e'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'school');
 $q="insert into sign_up (email,name,dob,password) values ('$em','$n','$d','$p')";
 mysqli_query($con,$q);
 header('location:login.php');
 ?>