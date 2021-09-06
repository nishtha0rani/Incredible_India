<?php
$con=mysqli_connect('localhost','root','','trail');
if(!$con)
{
  echo "server not connected";
}
if (!mysqli_select_db($con,'trail'))
{
  echo "not database";
}
$Name=$_POST['firstname'];
$Name=$_POST['lastname'];
$Contact_Info=$_POST['email'];
$Contact_Info=$_POST['phoneno'];
$Login_Info=$_POST['username'];
$Login_Info=$_POST['password'];
$Place=$_POST['state'];
$Place=$_POST['city'];
$sql="INSERT INTO loginform(firstname,lastname,email,phoneno,username,password,state,city) VALUES ('$Name','$Name','$Contact_Info','$Contact_Info','$Login_Info','$Login_Info','$Place','$Place')";
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