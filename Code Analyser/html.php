<?php

session_start();

if((isset($_SESSION["username"]))&&(isset($_SESSION["password"])))
{

echo '<script language="javascript">';
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
        <link rel="stylesheet" type="text/css" href="html_homepage.css">
       
    </head>
    <body>
        <div class="header">
             <h1>HTML Tutorial</h1>
        
        </div>
       
       
        <div class="leftside">
           <a href="htmllink1.html"
              target="frame1">HTML introduction</a>
            <a href="htmllink2.html" target="frame1">HTML Basic</a>
            <a href="htmllink3.html" target="frame1">HTML Table </a>
            <a href="htmllink4.html" target="frame1">HTML List</a>
 <a href="htmllink5.html" target="frame1">HTML Class</a>
            
    <a href="htmllink6.html" target="frame1">HTML ID</a>
        </div>    
        <div class="main">
            <iframe name="frame1" height="100%" width="100%"></iframe>
        </div>

      
        <div class="footer">
            <!------------------------- Trigger/Open The Modal ---------------------->

            <a id="mylink">About</a>
            
            <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>About</h2>
    </div>
    <div class="modal-body">
      <h2><small>Developed by</small><b><i> Nirish Samant </i></b></h2>
    </div>
   
  </div>

</div>

        </div>

    </body>
</html>
