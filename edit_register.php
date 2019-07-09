<?php
	$roll=$_REQUEST['r'];
	$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'school');
	$q="select * from register where rollno='$roll'";
	$rs=mysqli_query($con,$q);
	$row=mysqli_fetch_array($rs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="register_update.php" method="post">
<table width="100%" align="left" border="0" cellpadding="6" cellspacing="0">
	<caption>Edit Registration Form</caption>
	<tr>
		<td width="13%" align="right">Name</td>
	  <td width="87%"><input type="text" name="n" size="50" value="<?php echo  $row['name']; ?>" /></td>
	</tr>
	<tr>
		<td align="right">Roll no</td>
		<td><input name="rollno" type="text" size="50" value="<?php echo $row['rollno']; ?>" readonly="yes" /></td>
	</tr>
	<tr>
		<td align="right">Cell no</td>
		<td><input name="cell" type="text" size="50"  value="<?php echo $row['cell']; ?>" /></td>
	</tr>
	<tr>
		<td align="right">Address</td>
		<td><textarea rows="10" cols="50" name="add"><?php echo $row['address']; ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update" />&nbsp;&nbsp;&nbsp;<a href="index.php"><input type="button" value="back" /></a></td>
	</tr>
</table>
</form>

</body>
</html>
