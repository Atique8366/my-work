<?php
$nam=$_REQUEST['n'];
$roll=$_REQUEST['rollno'];
$cell_no=$_REQUEST['cell'];
$address=$_REQUEST['add'];



$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'school');
$q="update register set name='$nam',cell='$cell_no',address='$address' where rollno=$roll";

$r=mysqli_query($con,$q);
if(!$r)
{
echo "Not udated";
}else {
header('location:index.php');
}
?>
