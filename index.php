<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="register_insert.php" method="post">
<table width="80%" align="center" border="1" cellpadding="6" cellspacing="0">
	<caption>Registration Form</caption>
	<tr>
		<td width="13%" align="right">Name</td>
	  <td width="87%"><input type="text" name="n" size="50" /></td>
	</tr>
	<tr>
		<td width="13%" align="right">F_Name</td>
	  <td width="87%"><input type="text" name="fn" size="50" /></td>
	</tr>
	<tr>
		<td align="right">Roll no</td>
		<td><input name="rollno" type="text" size="50" /></td>
	</tr>
	<tr>
		<td align="right">Class</td>
		<td><input name="class" type="text" size="50" /></td>
	</tr>
	<tr>
		<td align="right">Cell no</td>
		<td><input name="cell" type="text" size="50" /></td>
	</tr>
	<tr>
		<td align="right">Address</td>
		<td><textarea rows="10" cols="50" name="add"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="register" /></td>
	</tr>
</table>
</form>
<table width="100%" border="1">
	<tr>
		<th>Sr#</th>
		<th>Roll No</th>
		<th>Name</th>
		<th>F_Name</th>
		<th>Class</th>
		<th>Cell</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php
	$c=1;
		$con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'school');
		$q="select * from register order by name Asc";
		$rs=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($rs))
		{
	?>
	<tr>
		<td><?php echo $c++; ?></td>
		<td><?php echo $row['Roll No']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['F_Name']; ?></td>
		<td><?php echo $row['Class']; ?></td>
		<td><?php echo $row['Cell']; ?></td>
		<td><?php echo $row['Address']; ?></td>
		<td><a onclick="return confirm('Are you sure')" href="delete_register.php?r=<?php echo $row['Roll No']; ?>">Delete</a> &nbsp;&nbsp;&nbsp; <a href="edit_register.php?r=<?php echo $row['Roll No']; ?>">Edit</a></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
