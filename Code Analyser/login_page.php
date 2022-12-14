<?php

session_start();

?>






<!DOCTYPE html>

<html>

<head>

<title>Code Analyser</title>

<style>

#navbar
{

overflow: hidden;
background-color: rgb(0,128,128);

}

#navbar a,p
{

float: right;
display: block;
color: yellow;
padding: 14px 30px;
text-decoration: none;
font-size: 17px;

}

#navbar a:hover
{

background-color: #ddd;
color: black;

}

.sticky
{

position: fixed;
top: 0;
width: 100%;

}

</style>

</head>

<body>

<div id="navbar">

<a href="tests.php">Tests</a>
<a href="css.php">CSS</a>
<a href="html.php">HTML</a>

<a href="index.php" style="float:left">Code Analyser</a>

</div>

<script>

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction()
{

if (window.pageYOffset >= sticky)
{

navbar.classList.add("sticky")
  
}
else
{

navbar.classList.remove("sticky");

}

}
</script>

</body>

</html>


<html>

<head>

<title>Login</title>

<style>

body
{

background-image:url("images/login.jpg");
background-repeat:no-repeat;
background-size: cover;

}

td
{

font-family:Arial,Helvetica;

}

form
{

border: 10px solid blue;
border-radius: 20px;
font-family:Arial,Helvetica;
width: 600px;
background-color:yellow;

}

input
{

font-family:Arial,Helvetica;

}

</style>


</head>

<body>

<div align="center" style="margin-top:125px">

<form action="login.php" method="post">

<table border="0" cellspacing="10" cellpadding="10">

<tr>

<td>Username</td>

<td><input type="text" name="username" required></input></td>

</tr>

<tr>

<td>Password</td>

<td><input type="password" name="password" required></input></td>

</tr>

</table>

<br>

<input type="submit" value="Submit"></input>

<table border="0" cellspacing="10" cellpadding="10">

<tr>

<td>New User?</td>
<td><a href="signup.html"><h2>Sign Up</h2></a></td>

</tr>

</table>

</form>

</div>

</body>

</html>
