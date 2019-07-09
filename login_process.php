<?php


$p=$_REQUEST['ps'];
$em=$_REQUEST['e'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'school');
 
 $q="select * from sign_up where email='$em' and password='$p'";
 $rs=mysqli_query($con,$q);
 $count=mysqli_num_rows($rs);
 if($count==0)
 {
 	header('location:login.php');
	
 }else {
 
 	header('location:welcome.php');
 }
 ?>