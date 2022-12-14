<?php

session_start();

if((isset($_SESSION["username"]))&&(isset($_SESSION["password"])))
{

echo '<script language="javascript">';
echo 'alert("Give tests to practise and improve your skills.");';
echo '</script>';

}
else
{

echo '<script language="javascript">';
echo 'location.replace("login_page.php");';
echo '</script>';

}

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

<a href="logout.php">Logout</a>
<a href="user_details.php"><?php echo $_SESSION["username"]; ?> </a>
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

<title>User Details</title>

</head>

<style>

body
{

background-image:url("images/tests.jpeg");
background-repeat:no-repeat;
background-size: cover;

}

h1
{

color:yellow;
font-family: Helvetica,Arial,Comic Sans MS;

}

h3
{

color:orange;
font-family: Helvetica,Arial,Comic Sans MS;

}

</style>

</head>

<body>

<h1>HTML Tests</h1>

<h3>1) <a href="HTML_Test_1.php">HTML Online Test 1</a></h3>

</body>

</html>


