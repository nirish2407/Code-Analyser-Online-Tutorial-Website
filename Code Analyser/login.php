<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

$con=mysqli_connect("localhost","root","123456","Students");

if($con)
{

echo "Connected successfully";

}
else
{

echo '<script language="javascript">';
echo 'alert("Database Connection Failed. Please try again later.");';
echo 'location.replace("login_page.php");';
echo '</script>';

}

$sql="select * from login";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{

if(($username==$row["username"])&&($password==$row["password"]))
{

$flag=1;

$_SESSION["username"]=$row["username"];
$_SESSION["password"]=$row["password"];

break;

}

}

if($flag==0)
{

echo '<script language="javascript">';
echo 'location.replace("login_page.php");';
echo '</script>';

}
else
{

echo '<script language="javascript">';
echo 'location.replace("index.php");';
echo '</script>';

}

mysqli_close($con);

?>
