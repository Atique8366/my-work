<?php

$nam=$_REQUEST['n'];
$fnam=$_REQUEST['fn'];
$roll=$_REQUEST['rollno'];
$class=$_REQUEST['class'];
$cell_no=$_REQUEST['cell'];
$address=$_REQUEST['add'];



$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'school');

$q="insert into register (Roll_No,Name,F_Name,Class,Cell,Address) values ('$roll','$nam','$fnam','$class','$cell_no','$address')";
$r=mysqli_query($con,$q);
if(!$r)
{
echo "Not inserted";
}else {
header('location:index.php');
}
?>
