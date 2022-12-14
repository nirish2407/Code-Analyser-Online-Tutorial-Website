<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

<title>Code Analyser</title>

<style>

body
{

background-image:url("images/index.jpeg");
background-repeat:no-repeat;
background-size: cover;

}

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

#d1
{

margin:25px;
padding:25px;

height:100px;
width:100px;

text-align:center;

background-color:rgb(28,244,250);

border:15px dashed rgb(175,75,50);
border-radius:50%;

box-shadow:rgb(246,43,122) 0px 0px 0px 20px;

transition:transform 1s;

}

#d2
{

margin:25px;
padding:25px;

height:100px;
width:100px;

text-align:center;

background-color:rgb(155,185,225);

border:15px dashed rgb(35,75,150);
border-radius:50%;

box-shadow:rgb(246,43,22) 0px 0px 0px 20px;

transition:transform 1s;

}

#d3
{

margin:25px;
padding:25px;

height:100px;
width:100px;

text-align:center;

background-color:rgb(128,44,250);

border:15px dashed rgb(175,175,150);
border-radius:50%;

box-shadow:rgb(46,143,22) 0px 0px 0px 20px;

transition:transform 1s;

}

#d4
{

margin:25px;
padding:25px;

height:100px;
width:100px;

text-align:center;

background-color:rgb(105,185,125);

border:15px dashed rgb(135,225,250);
border-radius:50%;

box-shadow:rgb(206,143,22) 0px 0px 0px 20px;

transition:transform 1s;

}

#d5
{

margin:25px;
padding:25px;

height:100px;
width:100px;

text-align:center;

background-color:rgb(195,185,125);

border:15px dashed rgb(35,175,190);
border-radius:50%;

box-shadow:rgb(246,43,222) 0px 0px 0px 20px;

transition:transform 1s;

}


#d1:hover,#d2:hover,#d3:hover,#d4:hover,#d5:hover
{

transform:scale(2);

}

#p1
{

font:20px purisa;

}

table
{

margin-top:200px;
table-layout:fixed;
width:99%; 

}

</style>

</head>

<body>

<div id="navbar">

<?php

if((isset($_SESSION["username"]))&&(isset($_SESSION["password"])))
{

echo "<a href='logout.php'>Logout</a>";

$username=$_SESSION["username"];

echo "<a href='user_details.php'>$username</a>";

}
else
{

echo "<a href='login_page.php'>Login</a>";

}

?>

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

<div>

<table border="0" cellspadding="5px">

<tr>

<td>

<div id="d1" onclick="location.href='html.php'">

<p id="p1">HTML</p>

</div>

</td>

<td>

<div id="d2" onclick="location.href='css.php'">

<p id="p1">CSS</p>

</div>

</td>

<td>

<div id="d3" onclick="location.href='error_page.html'">

<p id="p1">Javascript</p>

</div>

</td>

<td>

<div id="d4" onclick="location.href='error_page.html'">

<p id="p1">jQuery</p>

</div>

</td>

<td>

<div id="d5" onclick="location.href='error_page.html'">

<p id="p1">PHP</p>

</div>

</td>

</tr>

</table>


</div>


</body>

</html>

