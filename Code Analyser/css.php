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
       <!---------------- Author : Nirish Samant ---------------> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="homepage.css">
        <link rel="stylesheet" type="text/css" href="model_box.css">
    </head>
    <body>
        <div class="header">
             
             <h1>CSS Tutorial</h1>
        
        </div>
       
       
        <div class="leftside">
            <a href="link1.html" target="frame1">CSS Introduction</a>
            <a href="link2.html" target="frame1">CSS syntax</a>
            <a href="link3.html" target="frame1">CSS color</a>
            <a href="link4.html" target="frame1">CSS Background</a>
            <a href="link5.html" target="frame1">CSS Links</a>
            <a href="link6.html" target="frame1">CSS Fonts</a>
        </div>     
    
        <div class="main">
            <iframe name="frame1" height="100%" width="100%" src="welcomepage.html"></iframe>
        </div>

        <div class="rightside">
            <h2>right_menu</h2>
    
        </div>
        <div class="footer">
            <!------------------------- Trigger/Open The Modal ---------------------->

            <a id="mylink" style="font-size:45px">About</a>
            
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("mylink");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!---------------------   model Box -------------------->
        </div>

    </body>
    <!---------------- Author : Nirish Samant --------------->
</html>
