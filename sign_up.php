<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Register </title>
</head>

<body>
	<form action="insert_signup.php" method="post">
	<table width="80%">
		<caption><h1>Register Page</h1></caption>
		<tr>
			<td width="47%" align="right">Name</td>
		  <td width="53%"><input type="text" name="n" /></td>
		</tr>
		<tr>
			<td width="47%" align="right">DOB</td>
		  <td width="53%"><input type="date" name="dob" /></td>
		</tr>
		<tr>
			<td width="47%" align="right">Email</td>
		  <td width="53%"><input type="text" name="e" /></td>
		</tr>
		<tr>
			<td align="right">Password</td>
			<td><input type="password" name="ps" /></td>
		</tr>
		<tr>
			<td align="right">Confirm Password</td>
			<td><input type="password" name="cps" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit"  value="Register"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center" style="padding-top:30px"><a href="register.php">Create new Account</a></td>
		</tr>
	</table>
	</form>
</body>
</html>
