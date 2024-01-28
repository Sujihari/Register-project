<?php
$con=new mysqli('localhost','root','','abcd');

if($con->connect_errno)  
{
	
	echo $con->connect_error;
	die();
}
?>

<html>
	<head>
		<title>Register Form</title>			
	</head>
<body>	
	
			<h1 align="center">NEW-USER REGISTRATION</h1>	
<center>
	<form action="pkh.php" method="post">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" required></td>
			</tr>
			
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" required></td>
			</tr>
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			
			<tr>
				<td>Type Password</td>
				<td><input type="password" name="password" placeholder="Type a password here..."></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="male"> Male
				<input type="radio" name="gender" value="female"> Female
				<input type="radio" name="gender" value="other"> Other</td>
			</tr>
			
			<tr>
				<td>DOB</td>
				<td><input type="date" name="dob" required></td>
			</tr>
			
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="cnum" maxlength="10" required></td>
			</tr>
			
			<tr>
				<td>Email-ID</td>
				<td><input type="email" name="email" required></td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td><input type="textarea" name="address" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Register"></td>
			</tr>
		
		</table>
	
	</form>
</center>
<?php
																	// Database post method insert part
		if(isset($_POST['submit']))
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$uname=$_POST['uname'];
			$password=$_POST['password'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$cnum=$_POST['cnum'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			
			if($fname!=""&&$lname!=""&&$uname!=""&&$password!=""&&$gender!=""&&$dob!=""&&$cnum!=""&&$email!=""&&$address!="")
			{
			
			$sql="Insert into asdf (fname,lname,uname,password,gender,dob,cnum,email,address) values
 ('$fname','$lname','$uname','$password','$gender','$dob','$cnum','$email','$address')";
			
			if($con->query($sql))
			{
				echo "Data stored";
			}
			else
			{
				echo "Insert data failed";
			}
			}
			else
			{
				echo "All feilds required";
			}
		}
		else
		{
			echo "Please enter all the datas";
		}
		
	?>
</body>
</html>