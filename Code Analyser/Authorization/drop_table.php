<?php

$conn=mysqli_connect("localhost","root","123456","Students");

if($conn)
{

echo "Database Connected Successfully";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Database Connection Failed. Please try again later.");';
echo '</script>';

}

$sql="drop table login";

if(mysqli_query($conn,$sql))
{

echo "login table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping login table failed.");';
echo '</script>';

}

$sql="drop table student_courses";

if(mysqli_query($conn,$sql))
{

echo "student_courses table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping student_courses table failed.");';
echo '</script>';

}

$sql="drop table student_tests";

if(mysqli_query($conn,$sql))
{

echo "student_tests table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping student_tests table failed.");';
echo '</script>';

}

$sql="drop table course_tests";

if(mysqli_query($conn,$sql))
{

echo "course_tests table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping course_tests table failed.");';
echo '</script>';

}

$sql="drop table courses";

if(mysqli_query($conn,$sql))
{

echo "courses table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping courses table failed.");';
echo '</script>';

}

$sql="drop table students";

if(mysqli_query($conn,$sql))
{

echo "students table dropped successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Dropping students table failed.");';
echo '</script>';

}

mysqli_close($conn); 

?>


