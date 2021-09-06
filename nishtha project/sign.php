<?php
$con=mysqli_connect('localhost','root','','project');
if(!$con)
{
  echo "server not connected";
}
if (!mysqli_select_db($con,'project'))
{
  echo "not database";
}
$Name=$_POST['fname'];
$Name=$_POST['lname'];
$Contact_Info=$_POST['email'];
$Contact_Info=$_POST['phone'];
$Login_Info=$_POST['uname'];
$Login_Info=$_POST['password'];
$sql="INSERT INTO loginform(fname,lname,email,phone,uname,password) VALUES ('$Name','$Name','$Contact_Info','$Contact_Info','$Login_Info','$Login_Info')";
if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else
{
  echo "inserted";
  header('Location:query.php');
}
?>