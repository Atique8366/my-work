<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'school');
$roll=$_REQUEST['r'];
$q="delete from register where rollno='$roll'";
$r=mysqli_query($con,$q);
if(!$r){

	echo "not deleted";
}else {

	header('location:index.php');
}

?>