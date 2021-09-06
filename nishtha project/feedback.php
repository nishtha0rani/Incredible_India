<?php
$con=mysqli_connect("localhost","root","","nishtha") or die(mysqli_error());
?>

<?php
error_reporting(0);
session_start();
if(isset($_POST['signin']))
{
	if($_POST['uname']=="" || $_POST['password']=="")
	{
		$err="Fill your id and password first";
	}
	else{
		$d=mysqli_query($con,"SELECT * FROM loginform where Username='{$_POST['uname']}'");
		$row=mysqli_fetch_object($d);
		$fid=$row->Username;
		$fpass=$row->Password;
		if ($fid==$_POST['uname'] && $fpass==$_POST['password'])
		{
			$_SESSION['suname']=$_POST['uname'];
			header('location:Homepage.php');
		}
	else
	{
		$err="Invalid id or password";
	}
}
}
?>
<form method="post">
<table width="323" border="1">
<tr>
<font color="#FF0000" size="+2"> <?php echo $err; ?> </font>
	<th width="171" scope="row"> Enter Your ID </th>
	<td width="136">
		<input type="text" name="uname">
	</td>
</tr>
<tr>
	<th scope="row"> Enter Your Password </th>
	<td>
		<input type="password" name="password">
	</td>
</tr>
<tr>
<th colspan="2" scope="row">
	<input type="submit"  value="signin"  name="signin">
	<a href="signup.php"> SignUp </a>
</th>
</tr>
</table>
</form>