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
$query=$_POST['query'];
$message=$_POST['message'];

$sql="INSERT INTO feedback(query,message) VALUES ('$query','$message')";
if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else
{
  echo "inserted";
  header('Location:contact.php');

}
?>