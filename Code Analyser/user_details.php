<?php

session_start();

if((isset($_SESSION["username"]))&&(isset($_SESSION["password"])))
{

echo '<script language="javascript">';
echo 'alert("Your details, enrolled courses and marks obtained in tests are displayed here!");';
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

background-image:url("images/user_details.jpg");
background-repeat:no-repeat;
background-size: cover;

}

h1
{

color:blue;
font-family: Helvetica,Arial,Comic Sans MS;

}

table
{

font-family:Arial,Comic Sans MS,Helvetica;
border-collapse: collapse;
text-align: center;
border: 5px solid orange;
width: 100%;
padding: 20px;

}

th
{

border: 1px solid #ddd;
padding: 8px;
background-color:rgb(0, 255, 255);

}

td
{

border: 1px solid #ddd;
padding: 8px;

}

tr:hover
{

background-color:#f5f5f5;

}

</style>

</head>

</html>

<?php

$conn=mysqli_connect("localhost","root","123456","Students");

if($conn)
{

echo '<script language="javascript">';
echo 'alert("Database Connection Successful");';
echo '</script>';

}
else
{

echo '<script language="javascript">';
echo 'alert("Database Connection Failed. Our technical team is working on the issue. Please try again later.");';
echo '</script>';

}

$username=$_SESSION["username"];

echo "<br><h1>User Details</h1><br>";

$sql="select * from students where username='$username'";
$result=mysqli_query($conn,$sql);

echo "<table>";
echo "<tr>";
echo "<th>Username</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Education</th><th>Stream</th><th>Date of Birth</th><th>Gender</th><th>Address</th><th>Mobile No</th>";
echo "</tr>";

while($row=mysqli_fetch_array($result))
{

echo "<tr>";

echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td>";

echo "</tr>";

}

echo "</table>";

echo "<br><h1>Enrolled Courses</h1><br>";

$sql="select e.course_id,e.course_name,e.course_hours,e.course_certification_fees from student_courses s,courses e where s.course_id=e.course_id and s.username='$username'";
$result=mysqli_query($conn,$sql);

echo "<table>";
echo "<tr>";
echo "<th>Course ID</th><th>Course Name</th><th>Course Duration</th><th>Course Certification Fees</th>";
echo "</tr>";

while($row=mysqli_fetch_array($result))
{

echo "<tr>";

echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";

echo "</tr>";

}

echo "</table>";

echo "<br><h1>Tests Results</h1><br>";

$sql="select test_id,total_questions,correct_answers,marks_obtained,total_marks from student_tests where username='$username'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

echo "<table>";
echo "<tr>";
echo "<th>Test ID</th><th>Total Questions</th><th>Correct Answers</th><th>Marks Obtained</th><th>Maximum Marks</th>";
echo "</tr>";

while($row=mysqli_fetch_array($result))
{

echo "<tr>";

echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";

echo "</tr>";

}

echo "</table>";

}
else
{

echo "You have not taken any tests up till now. Please take tests to improve your skills.";
echo "<br><br>";

}

?>
